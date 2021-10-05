<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmailsResource;
use Illuminate\Http\Request;
use App\Models\Receiver;
use Receivers;

class AEmailsController extends Controller
{
    public function index(){
        return EmailsResource::collection(Receiver::all());
    }
}
