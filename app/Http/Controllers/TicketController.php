<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Ticket;
Use Mail;
use Twilio\Rest\Client;

class TicketController extends Controller
{
    
    //creates a new ticket 

    public function newTicket($service)
    {

         //temp token 
         $tempToken = str_random(10);
         
         //get the first letter of the service
         $firstLetter = $service[0];

         // Count the current ticket in this service 
         $count = Ticket::where('service', $service);
      
         // the current count plus 1
         $tempticket = $count->count() + 1;

        //combine the first letter with the sum above
         $ticket = $firstLetter.$tempticket;

         // Create the new ticket
         $newticket = new Ticket();
         $newticket->service = $service;
         $newticket->ticket = $ticket;
         $newticket->token = $tempToken;
         $newticket->save();

      

         // get the current ticket being served
        $currentTicket = Ticket::where('service', $service) 
        ->where('status', '0')
        ->first();


       // redirect to the service menu page
       return view('public'.".".$service, [
        'service' => $service,
        'ticket' => $ticket,
        'token' => $tempToken,
        'currentTicket' => $currentTicket->ticket
 ]);

    }


      //Prints ticket then redirect to Thank you page!

      public function printTicket($token, Request $request)
      {
         
        $name = $request->input('name');
        $email = $request->input('email');


        //find the ticket binded with the token
        $findToken = Ticket::where('token', $token)
        ->first();


        
         //  add a pre email to show we will notify the user with the Email
         //  or phone number he/she entered.

         
        
     //Redirect to thank you page
     return view('public.thankyou', [
     'ticket' => $findToken->ticket,
     ]);

      }


    
      //Trigers to notify the fifth ticket

      public function notifyTicket()
      {

          //get the current ticket 
          $current = Ticket::all()
          ->first();
          
          // now we got the current ticket being served 
          // add 4 to get the fifth token?

          $fifthTicket = $current->id + 4;

          // now we got the fifth ticket
          // notify that his/her ticket is near

          $notifyFifth = Ticket::where('id', $fifthTicket)
          ->first();



          //Email Pre Notify 
         $data = array('name'=>'test', "title" => "Hello this is a testing", 
         "body" => "Hello Dancedrick, your ticket $notifyFifth->ticket is now fifth in line. Please stay around the Administration Building. this is a no-repy email Thank you! ");
         Mail::send('emails.notify', $data, function($message)  {
             $message->to('personal.dancedrick@gmail.com')
             ->subject('Admin Queue Pre Notification');
             $message->from('pandapewds11@gmail.com', 'Dancedrick Media');
         });


         // Phone 
            $sid = 'AC5bd097668259e6044c1323100ffe8784';
            $token = '42332ef7ea4466e00157f457c544ec93';
            $client = new Client($sid, $token);

            // Use the client to do fun stuff like send text messages!
            $client->messages->create(
            // the number you'd like to send the message to
            '+639457099237',
            array(
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12028512889',
            // the body of the text message you'd like to send
            'body' => 'Hello Dancedrick your Ticket '. $notifyFifth->ticket . ' is now fifth in line. Please stay around the Administration Building. this is a free and no-repy sms Thank you!'
        )
     );




      }


      // Gets the Service Backend

      public function getServiceBackend($service)
      {

         // get the current Ticket for this service 
         // the status should be 0
        $currentTicket = Ticket::where('service', $service) 
        ->where('status', '0')
        ->first();
          
        // the ticket
        $ticket = $currentTicket->ticket;

        // the Token
        $token = $currentTicket->token;

        // redirect to the service backend page
       return view('admin'.".".$service, [
        'service' => $service,
        'ticket' => $ticket,
        'token' => $token
        ]);


      }




      // Gets the next Ticket 

      public function nextTicket($service, $token)
      {
       
        // first make the current ticket status as 1
        // so it wont be find by the query (getServiceBackend)
        $currentTicket = Ticket::where('token', $token)
        ->update(['status' => '1'] );

        // now get the next ticket that has a status of 0
        $nextTicket = Ticket::where('service', $service) 
        ->where('status', '0')
        ->first();

         $ticket  = $nextTicket->ticket;
         $token = $nextTicket->token; 


          // redirect to the service backend page
       return view('admin'.".".$service, [
        'service' => $service,
        'ticket' => $ticket,
        'token' => $token
        ]);

      }



    
    
}
