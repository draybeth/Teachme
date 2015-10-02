<?php namespace TeachMe\Entities;


/**
 * @property mixed status
 */
class Ticket extends Entity {

    public function comments()
    {
        return $this->hasMany(Ticket_comments::getClass());
    }

    public function voters()
    {
        return $this->belongsToMany(User::getClass(), 'ticket_votes');
    }
    public function author()
    {
        return $this->belongsTo(User::getClass());
    }

	public function getOpenAttribute(){

        return $this->status == 'open';
    }

}
