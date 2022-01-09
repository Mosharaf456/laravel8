<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    //as Model name Person by using convention name of database table as model name plural form people
    //so can,t need to use ::::  protected $table = "person";

    //if use your own table name the it will like below
    // protected $table = "person";
    
    //if use own table arrtibute primary key name
    protected $primaryKey = "person_id";
}
