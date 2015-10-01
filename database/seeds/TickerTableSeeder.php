<?php


use database\seeds\BaseSeeder;
use TeachMe\Entities\Ticket;

class TickerTableSeeder extends BaseSeeder
{

    /**
     * @return Ticket
     */
    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
          'title'   =>  $faker->sentence(),
          'status'  =>  $faker->randomElement(['open','open','closed']),
          'user_id' =>  $this->getRandom('User')->id

        ];
    }



}