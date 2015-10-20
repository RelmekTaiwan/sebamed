<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactController extends Controller {

	public function create() {
        return view('contacts');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        //Contact::create($request->all());
        $user = array('email'=>'nicole@relmek.com.tw', 'name'=>'Nicole');
        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email, $user->name)->subject('聯絡我們 - 施巴形象官網');
        });
        return redirect('contacts/create');
    }

}
