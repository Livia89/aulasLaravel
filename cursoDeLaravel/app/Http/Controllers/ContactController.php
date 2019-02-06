<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Contact;  // indica o caminho que o model encontra-se, para não precisar usar \App\Contact

class ContactController extends Controller
{

    public function index(){
      $contacts = [
        (object)["name" => "Lívia", "tel" => "927546995"],
        (object)["name" => "Bruna", "tel" => "964586233"],
      ]; // contact List -> array of objects


      // to make instance of model
    //  $contact = new \App\Contact();
    // dd($contact->list());



      $contact = new Contact();
      $con = $contact->list();
      dd($con->name);

      // return view('contact.contact', ["data" => $contacts]);
      return view('contact.contact', compact('contacts'));
    }
    public function create(Request $req){

      //dd($req["name"]);
      dd($req->all()); // Listar todos os dados que foram enviado do form
      return "Este é o Criar do Controller Contact";
    }
    public function update(){
      return "Este é o Update  do Controller Contact";
    }
}
