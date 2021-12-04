<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function sendEmail(Request $request){

        $to_name = $request->name;
        $to_email = $request->email;
        $data = ["messageMail" => $request->text, "name" => $to_name, "email"=> $to_email];

        \Mail::send("emails.emailUser", $data, function($message) {

            $message->to("contacto@lattitude.co",)->subject("Contact");
            $message->from( env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

        });

        return response()->json(["success" => true]);

    }
}
