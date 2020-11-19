<!DOCTYPE html>
<html lang="en">
<head>
    <title>ROCKAROMA -SIT-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{url('upload-gdrive-action')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" class="form-control" name="thing" />
                    <br>
                    <input type="submit" class="btn-primary" value="Upload">
                </form>
            </div>
        </div>
    </div>

</body>
</html>

