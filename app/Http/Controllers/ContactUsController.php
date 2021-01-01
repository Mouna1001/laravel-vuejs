<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use Mail;

class ContactUsController extends Controller
{
    //
    public function index(){

        $pages = Page::All();


        return view('website.contact',['pages' => $pages]);
    }
    public function sendMessage(Request $request){
        
        $input = $request->all();
        $pages = Page::All();

        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);
        
        Mail::send('mailes.contactus',['nameInput' => $input['name'],'messageInput' => $input['subject']],function($message){
            $message ->from('mounae020@gmail.com','mouna');

            $message ->to('sssho790p@gmail.com');
        });
        return view('website.contact',['pages' => $pages])->with('successMessage'.'Thank you your message has been sent!');
    }

    public function sendMessageAjax(Request $request){
        $input = $request->all();
        dd($input);
    }
}
