<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      DB::table('users')->insert([
        'name' =>'Saidul Islam Uzzal',
        'phone' =>'01710726035',
        'email' =>'uzzalbd.creative@gmail.com',
        'password' => Hash::make('12345678'),
        'role' =>1,
        'slug'=>'U20lw7yt11',
        'created_at'=>Carbon::now()->toDateTimeString(),
      ]);
    }
}
