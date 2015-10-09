<?php namespace TeachMe\Http\Controllers;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use TeachMe\Entities\Ticket;
use TeachMe\Repositories\TicketRepository;

/**
 * Created by PhpStorm.
 * User: avid
 * Date: 30/09/15
 * Time: 04:22 PM
 */

class TicketsController extends Controller{
    /**
     * @var TicketRepository
     */
    private $ticketRepository;

    /**
     * @param TicketRepository $ticketRepository
     */
    public function __construct(TicketRepository $ticketRepository)
    {

        $this->ticketRepository = $ticketRepository;
    }


    public function latest()
    {
        $tickets = $this->ticketRepository->paginateLates();
        return view('tickets.list',compact('tickets'));
    }

    public function popular()
    {
        dd('popular');
    }

    public function open()
    {
        $tickets = $this->ticketRepository->paginateOpen();
        return view('tickets.list ',compact('tickets'));
    }

    public function closed()
    {
        $tickets = $this->ticketRepository->paguinaClose();
        return view('tickets.list ',compact('tickets'));
    }

    public function details($id)
    {
        $ticket = $this->ticketRepository->findOrFail($id);

        return view('tickets.details', compact('ticket'));

    }

    public function create()
    {
      return view('tickets.create');
    }

    public function store( Request $request, Guard $auth)
    {
        $this->validate($request,[
        'title'=>'required|max:100'
        ]);

        $ticket = $auth->user()->tickets()->create([
           'title'=>$request->get('title'),
            'status'=>'open'
        ]);



        return Redirect::route('tickets.details', $ticket->id);
    }


}