<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Person;
class PersonsController extends Controller
{
    public function index()
    {
        $person_list = Person::all();  //select * form people;
        // dd($person_list->toArray());
        return view('personlist',compact('person_list'));

    }
}

// model represent a table in database
// model creation
// migration what is
// creation of migration
// creting column in migration
// model create with migration
// select all statement -> Model::all()
// model convention
// override primarykey
// override table name
// code first
// DB/databse first concept

