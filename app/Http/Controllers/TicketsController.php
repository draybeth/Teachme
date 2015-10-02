<?php namespace TeachMe\Http\Controllers;


use Illuminate\Http\Request;
use TeachMe\Entities\Ticket;

/**
 * Created by PhpStorm.
 * User: avid
 * Date: 30/09/15
 * Time: 04:22 PM
 */

class TicketsController extends Controller{

    public function latest()
    {
        $tickets = Ticket::orderBy('created_at','DESC')->paginate(15);
        return view('tickets.list',compact('tickets'));
    }

    public function popular()
    {
        dd('popular');
    }

    public function open()
    {
        $tickets = Ticket::where('status','open')->orderBy('created_at','DESC')->paginate(10);
        return view('tickets.list ',compact('tickets'));
    }

    public function closed()
    {
        $tickets = Ticket::where('status','closed')->orderBy('created_at','DESC')->paginate(10);
        return view('tickets.list ',compact('tickets'));
    }

    public function details($id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('tickets.details', compact('ticket'));

    }

    public function create()
    {
      return view('tickets.create');
    }

    public function store( Request $request)
    {
        dd($request->all());

    }


}