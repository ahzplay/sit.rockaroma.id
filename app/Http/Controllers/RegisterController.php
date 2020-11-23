<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\FilesUploadeds;
use Illuminate\Http\Request;
use App\Http\Controllers\RegionController;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    public function index(Request $request){
        $request->session()->put('menu-active-home', '');
        $request->session()->put('menu-active-register', 'active');

        $cities = new RegionController();
        $cities = $cities->fetchCities();
        return view('register_profile')->with(['cities'=>$cities->getData()]);
    }

    public function saveDemo(Request $request) {
        ini_set('max_execution_time', 480);
        //dd($request->file('fileDemo')/*->store('','google')*/);
        $validator = Validator::make($request->all(),
            [
                'contact' => 'required|numeric',
                'cityCode' => 'required',
                'bandName' => 'required',
            ],
            [
                'bandName.required' => 'Band Name cannot be empty',
                'cityCode.required' => 'Location cannot be empty',
                'contact.required' => 'Contact cannot be empty',
                'contact.numeric' => 'Contact must be numeric',

            ]
        );
        if($validator->fails()){
            return response()->json(array('status'=>'fail','message'=>$validator->errors()));
        }

        try{
            if ($request->hasFile('profileImgFile')) {
                $image      = $request->file('profileImgFile');
                $imageFileName   = md5(time()) . '.' . $image->getClientOriginalExtension();

                $demoFile = $request->file('demoFile');
                $audioExtension = array('mp3','m4a','wav');
                $videoExtension = array('mp4');
                if(in_array(strtolower($image->getClientOriginalExtension()),$audioExtension)) {
                    if($demoFile->getSize() >= 2010000) {
                        return response()->json(array('status'=>'fail', 'message'=>'File size maximal 20 MB for audio'));
                        die();
                    }
                } else if(in_array(strtolower($image->getClientOriginalExtension()), $videoExtension)){
                    if($demoFile->getSize() >= 10010000) {
                        return response()->json(array('status'=>'fail', 'message'=>'File size maximal 100 MB for video'));
                        die();
                    }
                }

                $img = Image::make($image->getRealPath());
                $img->resize(600, 480, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->stream();
                $profileImagePath = $request->file('profileImgFile')->storeAs('registered_band', $imageFileName, 'public');

                if(!empty($profileImagePath)) {
                    $demoFileClouded = $request->file('demoFile')->store('','google');
                    if(!empty($demoFileClouded)) {
                        $band = new Band();
                        $band->band_name = $request->bandName;
                        $band->city_code = $request->cityCode;
                        $band->phone_number = $request->contact;
                        $band->updated_at = date('Y-m-d H:i:s');
                        $band->save();
                        $files = array(
                            new FilesUploadeds([
                                'band_id'=>$band->id,
                                'storage'=>'local',
                                'file_type'=>'image',
                                'file_name'=>$profileImagePath,
                                'path'=> asset('storage/registered_band').'/'.$imageFileName,
                                'updated_at'=>date('Y-m-d H:i:s'),
                            ]),
                            new FilesUploadeds([
                                'band_id'=>$band->id,
                                'storage'=>'google',
                                'file_type'=>'audio/video',
                                'file_name'=>$demoFileClouded,
                                'path'=>'https://drive.google.com/drive/u/0/search?q='.$demoFileClouded,
                                'updated_at'=>date('Y-m-d H:i:s'),
                            ])
                        );
                        $band->filesUploadeds()->saveMany($files);

                        if($band) {
                            return response()->json(array('status'=>'success', 'message'=>'Success'));
                        }
                    }
                }
            }
        } catch(Exception $e) {
            return response()->json(array('status'=>'fail', 'message'=>$e->getMessage()));
        }

    }

    public function checkingProfileForm(Request $request) {
        if(
            !empty($request->bandName) ||
            !empty($request->cityCode) ||
            !empty($request->contact) ||
            $request->hasFile('ImageUpload')
        ) {
            return response()->json(array('status'=>'success','message'=>'Form completed'));
        } else {
            return response()->json(array('status'=>'fail','message'=>'Form not completed'));
        }
    }

    public function fetchBands() {
        $raw = Band::with('filesUploadeds')->get();
        return response()->json($raw);
    }
}
