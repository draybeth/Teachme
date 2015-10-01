<?php
use database\seeds\BaseSeeder;
use TeachMe\Entities\TicketVote;

/**
 * Created by PhpStorm.
 * User: avid
 * Date: 30/09/15
 * Time: 03:21 PM
 */


class TicketVoteTableSeeder extends  BaseSeeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return[
          'user_id'     => $this->getRandom('User')->id,
          'ticket_id'   => $this->getRandom('Ticket')->id
        ];
    }

}