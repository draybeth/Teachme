<?php namespace TeachMe\Entities;


class Ticket_comments extends Entity {


    protected $fillable = ['comment','link'];

	public function user()
    {
        return $this->belongsTo(User::getClass());
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::getClass());
    }

}
