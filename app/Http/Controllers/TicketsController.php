<?php namespace TeachMe\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: avid
 * Date: 30/09/15
 * Time: 04:22 PM
 */

class TicketsController extends Controller{

    public function latest()
    {
        return view('tickets.list');
    }

    public function popular()
    {
        dd('popular');
    }

    public function open()
    {
        return view('tickets.details');
    }

    public function closed()
    {
        dd('closed');
    }

    public function details($id)
    {

    }


}