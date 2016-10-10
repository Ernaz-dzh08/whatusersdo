<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;
use App;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;
class UserController extends Controller
{

	public function index(){
	
		return view('user');
	}
 	
    //
	 /**
     * Display a listing of the resource.
     * GET /order
     *
     * @return Response
     */
	 public function storeUser(Request $request)
    {

		$emailLibSwift = config('local.app.email_from');
		$emailLibPhpMail = config('app.email_from');
		$email = $request->input('email');

		$this->validate($request, [
		    'firstname' => 'required|max:20',
		    'lastname' => 'required|max:20',
            'email' => 'required|unique:users|email|max:255',
           
        ]);
 
        $result = User::create([
            'first_name' => $request->input('firstname'),
            'last_name' => $request->input('lastname'),
            'email' => $request->input('email'),
        ]);
		
		/**
		* This is the email section below 
		* please un-comment and enter email 
		* config to make it work
		* @return Response
		*/
		
		/*if (App::environment('local')) {
			// The environment is local
		
		// Create the Transport
		$transport = Swift_SmtpTransport::newInstance('smtp.mailgun.org', 587)
		  ->setUsername($emailLibSwift)
		  ->setPassword('password');

		$emailAddress = config('local.app.email_from');
	
		$mailer = Swift_Mailer::newInstance($transport);

		// Create a message
		$message = Swift_Message::newInstance('Email test')
		  ->setFrom(array($emailAddress => 'Luke Dane'))
		  ->setTo(array($email, 'johnbale@domain.org' => 'John Bale'))
		  ->setBody('Hello there!');

		// Send the message
		$result = $mailer->send($message);
		} else{
			$mail = new \PHPMailer(true); 
			try {
				$mail->isSMTP(); 
				$mail->CharSet = "utf-8"; 
				$mail->SMTPAuth = true;  
				$mail->SMTPSecure = "tls"; 
				$mail->Host = "yourmailhost";
				$mail->Port = 2525;  
				$mail->Username = "username";
				$mail->Password = "password";
				$mail->setFrom($emailLibPhpMail, "Firstname Lastname");
				$mail->Subject = "Test";
				$mail->MsgHTML("This is a test");
				$mail->addAddress($email, "John Bale");
				$mail->send();
			} catch (phpmailerException $e) {
				dd($e);
			} catch (Exception $e) {
				dd($e);
			}
			die('success');
		
		}*/
	
		
	    return redirect()->back()->with('success',['Success! submitted successfully']);
    }
	
}

