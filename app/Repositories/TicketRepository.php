<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 09/10/15
 * Time: 02:38 AM
 */

namespace TeachMe\Repositories;


use TeachMe\Entities\Ticket;

class TicketRepository
{
    protected function selectTicketList()
    {
        return Ticket::selectRaw(
            ' tickets.*, '
            .'(SELECT COUNT(*) FROM ticket_comments WHERE ticket_comments.ticket_id = tickets.id ) as num_comments, '
            .'(SELECT COUNT(*) FROM ticket_votes WHERE ticket_votes.ticket_id = tickets.id ) as num_votes '
        )->with('author');
    }

    public function paginateLates()
    {
       return $this->selectTicketList()->orderBy('created_at','DESC')->with('author')->paginate(15);
    }

    public function paginateOpen()
    {
        return $this->selectTicketList()->where('status','open')->orderBy('created_at','DESC')->paginate(10);
    }

    public function paguinaClose()
    {
        return $this->selectTicketList()->where('status','closed')->orderBy('created_at','DESC')->paginate(10);
    }

    public function findOrFail($id)
    {
        return Ticket::findOrFail($id);
    }

}