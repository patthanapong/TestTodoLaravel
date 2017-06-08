<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['user_id','title','url','description','status','date'];

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
