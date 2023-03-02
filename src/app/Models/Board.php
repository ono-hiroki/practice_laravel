<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    public function getData(): string
    {
        return $this->id . ': ' . $this->title . ' (' . $this->person->name . ')';
    }
}
