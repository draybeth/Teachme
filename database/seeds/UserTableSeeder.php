<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/09/15
 * Time: 11:56 PM
 */


use database\seeds\BaseSeeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    public function getModel()
    {
        return new User();
    }
    public function getDummyData( Generator $faker,array $customValues = array() )
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret')

        ];
    }

    public function createAdmin(){
        $this->create([
            'name'=>'santos avid',
            'email'=>'silva@santosavid.com',
            'password'=>bcrypt('admin'),
        ]);
    }

}