<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'user01',
            'email' => 'user01@example.com',
            'password' => Hash::make('coachtech'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'user02',
            'email' => 'user02@example.com',
            'password' => Hash::make('coachtech'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'user03',
            'email' => 'user03@example.com',
            'password' => Hash::make('coachtech'),
        ];
        DB::table('users')->insert($param);
    }
}
