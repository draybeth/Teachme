<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/09/15
 * Time: 11:56 PM
 */


use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $this->createAdmin();
        $this->createUsers(50);

    }

    public function createAdmin(){
        User::create([
            'name'=>'santos avid',
            'email'=>'silva@santosavid.com',
            'password'=>bcrypt('admin'),
        ]);
    }

    public function createUsers($total)
    {
        $faker = Faker::create();
        for ($i = 1; $i <= $total; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret')

            ]);
        }
    }

}