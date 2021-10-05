<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receiver;
use Illuminate\Support\Facades\DB;
use Receivers;

class EmailsController extends Controller
{
    public function index()
    {

        return Receiver::all();

    }
}
