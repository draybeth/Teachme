<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 29/09/15
 * Time: 09:46 PM
 */

namespace database\seeds;

use Faker\Factory as Faker;
use Faker\Generator;
use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    protected function createMultiple($total, $customValues =array())
    {
        for ($i = 1; $i <= $total; $i++) {
             $this->create($customValues);
        }
    }

    abstract public function getModel();
    abstract public function getDummyData(Generator $faker,array $customValues =array());

    protected function create(array $customValues =array())
    {
        $values = $this->getDummyData(Faker::create(),$customValues);

        $values= array_merge($values,$customValues);

        return $this->getModel()->create($values);
    }

    protected function createFrom($seeder , array $customValues =array())
    {
       $seeder = new $seeder;
       return $seeder->create($customValues);

    }



}