<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['start_time','finish_time'];

    protected $fillable=[
        'user_id',
        'start_time',
        'finish_time',
        'everybody',
        'comments'
        ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
