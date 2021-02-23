<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactCreated;
use Illuminate\Support\Facades\Mail; 


class ContactController extends Controller
{
    //


  public function index()
  {
    $contacts = Contact::all();

    //dd($contacts);

    return view('admin.adiAdministrator.index')->with('contacts',$contacts);
  }

  public function show(Contact $contact)
  {
       return view('admin.adiAdministrator.show')->with('contact',$contact);
  }


    public function store(Request $request)
    {
    	 Contact::create($this->validators());
    	  //send email to admin
         $mailable = new ContactCreated($request->nom, $request->email, $request->tel, $request->message);
          Mail::to(config('adi.admin_support_email'))
                  ->send($mailable);

    	return redirect()->back()->with('success','Votre message a été réçu avec succès, nous vous contacterons dans un brèf délai.');
    }

     public function destroy(Contact $contact)
      {
           $contact->delete();

           return redirect()->route('index.contact')->with('success', 'Message supprimé avec succès');
      }


     //Fonction permettant la validation des données
    private function validators()
    {

        return request()->validate([
           'nom' => ['required','string','min:2'],
           'tel' => ['required','min:6'],
           'email' => ['required','email','max:255'],
           'message' => ['required','min:10'],

        ]);
    }
}
