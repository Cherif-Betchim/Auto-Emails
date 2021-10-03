<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Receiver;
use Illuminate\Support\Facades\DB;



class EmailsController extends Controller
{

    public function getAllEmails()
    {

        $receivers = DB::table('receivers')
            ->select(array('id', 'email', 'intervalM', 'satus'))
            ->get();



        //var_dump($receivers);
        return view('auth.receivers', compact('receivers'));
    }


    public function show($id)
    {

        DB::table('receivers')->where('id', '=', $id)->get();
    }


    public function store(Request $request)
    {   
        $request->validate([
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'intervalM' => ['required', 'integer', 'max:10'],
        ]);



        $receiver = Receiver::create([
            'email' => $request->email,
            'intervalM' => $request->intervalM,
        ]);

        return redirect('all-receivers')->with('success','Receiver is Added .');
    }

    public function showForm($id)
    {
        $data = Receiver::find($id);

        return view('auth.edit-receivers', compact('data'));
    }

    public function update(Request $req)
    {
        $data = Receiver::find($req->id);
        $data->email = $req->email;
        $data->intervalM = $req->interval;
        $data->satus = $req->status;
        $data->save();


        return redirect('all-receivers')->with('success','Receiver is updated .');
    }




    public function delete($id)
    {

        DB::table('receivers')->where('id', '=', $id)->delete();

        return redirect('all-receivers')->with('success','Receiver Deleted.');
    }
}
