<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(
            array(
                [
                    'name'=>'admin',
                    'created_at'=>'2021-01-28 00:30:35',
                ],
                [
                    'name'=>'member',
                    'created_at'=>'2021-01-28 00:30:35',
                ],
                [
                    'name'=>'musician',
                    'created_at'=>'2021-01-28 00:30:35',
                ],
            )
        );
    }
}
