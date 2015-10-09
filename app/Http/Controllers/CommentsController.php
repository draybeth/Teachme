<?php
/**
 * Created by PhpStorm.
 * User: avid
 * Date: 02/10/15
 * Time: 11:31 AM
 */

namespace TeachMe\Http\Controllers;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use TeachMe\Entities\Ticket;
use TeachMe\Entities\Ticket_comments;


class CommentsController extends Controller
{
    public function submit($id, Request $request, Guard $auth)
    {


        $this->validate($request, [
           'comment' =>'required|max:250',
            'link'   => 'url'
        ]);

         $comment = new Ticket_comments($request->all());
         $comment->user_id= $auth->id();

        $ticket = Ticket::findOrFail($id);
        $ticket->comments()->save($comment);
        session()->flash('success', 'tu Comentario fue agregado');
        return redirect()->back();



    }


}