<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 02/10/15
 * Time: 02:53 PM
 */

/**
 * @return \TeachMe\Entities\User
 */

function currentUser()
{
    return auth()->user();
}