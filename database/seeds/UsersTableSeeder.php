<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        for ($i=0; $i < 1000; $i++) { 
            dump("num".$i);    
        
            $a = str_random(8);
            $b = str_random(8);
            $c = str_random(8);
            
            User::create([
                'a' => $a,
                'b' => $b,
                'c' => $c,
            ]);
        }
    }
}
