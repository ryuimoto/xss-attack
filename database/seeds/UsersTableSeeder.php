<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 2; $i++) { 
            dump("num".$i);
        
            $email = "test$i@gmail.com";
            $a = str_random(8);
            $b = str_random(8);
            $c = str_random(8);
            $pass = Hash::make('qqq111');
            
            User::create([
                'email' => $email,
                'a' => $a,
                'b' => $b,
                'c' => $c,
                'password' => $pass,
            ]);
        }
    }
}
