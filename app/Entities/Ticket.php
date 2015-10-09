<?php namespace TeachMe\Entities;


/**
 * @property mixed status
 */
class Ticket extends Entity {

    protected $fillable = ['title','status'];



    public function comments()
    {
        return $this->hasMany(Ticket_comments::getClass());
    }

    public function voters()
    {
        return $this->belongsToMany(User::getClass(), 'ticket_votes')->withTimestamps();
    }
    public function author()
    {
        return $this->belongsTo(User::getClass(),'user_id');
    }

	public function getOpenAttribute(){

        return $this->status == 'open';
    }

}
