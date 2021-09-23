<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Receiver;



class EmailsController extends Controller
{

    public function getAllEmails(){

        $receivers = Receiver::all();
        return view('auth.receivers')->with('receivers', $receivers);
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'intervalM' => ['required', 'integer', 'max:10'],
        ]);

        $receiver = Receiver::create([
            'email' => $request->email,
            'intervalM' => $request->intervalM,
        ]);

        return redirect('all-receivers');


    }
}


