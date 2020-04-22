<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulaire;




class formController extends Controller
{

    public function show(){

        return view('formulairepage');
    }

  
    

    public function create(){

        return view('export_excel')->with('formulaire_data',Formulaire::all());
    }


//
public function add(Request $request){


    $inputValue =Formulaire::all();
    request()->validate([

        'nom'=>'required',
        'prenom'=>'required',
        'departement'=>'required',
        'formation'=>'required'


    ]);

   

   // $arrayTostring = implode(",",$request->input('chekbox'));
    //$inputValue['chekbox']=$arrayTostring;
    //$chekboxs = $request->input('chekbox');
    //$autre=request('autre');

$arrytostring=implode(',', $request->input('chekbox'));


$inputValue['chekbox']=$arrytostring;


$test= new Formulaire();



$test->nom=request("nom"); 
$test->prenom=request("prenom");
$test->departement=request("departement");   
$test->formation=request("formation");
$test->radio=request("radio");
$test->autre=request('autre');
$test->population=request('population');
$test->chekbox= $inputValue['chekbox'];
$test->save();
return back();


}


}
