<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
         $adminRecords = [
            [
                'id'=>1,
                'name'=>'ATL Admin',
                'type'=>'Super admin',
                'mobile'=>'0171931999',
                'email'=>'admin@ayaantec.com',
                'password'=>Hash::make('admin1234'),
                'image'=>'user.png',
                'status'=>1

            ],
            
         ];

         foreach($adminRecords as $key => $records){
             \App\Models\Admin::create($records);
         }
    }
}
