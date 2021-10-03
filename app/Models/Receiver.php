<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $receiver = 'receivers';
    public $timestamp = false;
    protected $fillable = [
        'email',
        'intervalM',
        'satus'
    ];

}
