<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->defaultUser();
        $faker=Factory::create();
        foreach (range(1,20) as $index){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt(12345678),
            ]);
        }
    }

    public  function defaultUser(){
        User::create([
            'name'=>'Faizur',
            'email'=>'faizcse51@gmail.com',
            'password'=>bcrypt(12345678),
        ]);
    }
}
