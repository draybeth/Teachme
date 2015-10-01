<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 30/09/15
 * Time: 03:30 PM
 */

use database\seeds\BaseSeeder;
use Faker\Generator;
use TeachMe\Entities\Ticket_comments;

class TicketCommentTableSeeder extends BaseSeeder
{

    protected $total = 250;

    public function getModel()
    {
       return new Ticket_comments();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return[
            'user_id'     => $this->getRandom('User')->id,
            'ticket_id'   => $this->getRandom('Ticket')->id,
            'comment'     => $faker->paragraph(),
            'link'        => $faker->randomElement(['','',$faker->url])
        ];
    }
}