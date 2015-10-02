<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 01/10/15
 * Time: 10:17 PM
 */

namespace TeachMe\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public static function getClass()
    {
        return get_class(new static);
    }

}