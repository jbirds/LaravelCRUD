<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests;

class HavenController extends Controller
{

    const ERRORMSG = "Something went wrong! Please try again later.";

    public function strclean($string) {
        $string = str_replace(' ', '', $string);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }

    public function addressClean($string) {
        return preg_replace('/[^A-Za-z0-9 #]/', '', $string);
    }

    public function intclean($int) {
        if(!is_numeric($int)) {
            return preg_replace('/\D/', '', $int);
        }
        return $int;
    }

    public function getIndex() {
        return view('haven.index', ['contacts' => $this->anyData()]);
    }

    public function anyData() {
        return Contact::orderBy('lastName', 'ASC')->paginate(10);
//        return Contact::orderBy('lastName', 'ASC')->get();
    }

    public function updatePage(Request $request) {
        $contact = Contact::find($request->id);
        return view('haven.update', ['contact' => $contact]);
    }

    public function create(Request $request) {

        $contactId = Contact::find($request->id);

        if (is_null($contactId)) {
            $contact = new Contact;
            $message = "New contact saved!";
        } else {
            $contact = $contactId;
            $message = "Contact updated!";

        }

        $dateString = strtotime($request->month.'/'.$request->date.'/'.$request->year);
        $date = date('Y-m-d',$dateString);

        $contact->firstName = $this->strclean($request->firstName);
        $contact->lastName = $this->strclean($request->lastName);
        $contact->email = $request->email;
        $contact->phone = $this->intclean($request->phone);
        $contact->birthday = $date;
        $contact->address = $this->addressClean($request->address);
        $contact->city = $this->addressClean($request->city);
        $contact->state = $this->strclean($request->state);
        $contact->zip = $this->intclean($request->zip);

        if ($contact->save()) {

        } else {
            $message = ERRORMSG;
        }

        return redirect('/haven')->with('status', $message);
    }

    public function delete(Request $request) {

        $contact = Contact::find($request->rowId);
        if ($contact->delete()) {
            $message = "Successfully deleted contact!!";
        } else {
            $message = ERRORMSG;
        }

        return redirect('/haven')->with('status', $message);
    }
}
