<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Animal;

class AnimalController extends Controller
{
    // public function index()
    // {
    //     $pets = DB::select('SELECT animals.*, owners.first_name as first_name, owners.surname as surname, owners.email as email, owners.phone as phone, owners.address as `address` FROM `animals` LEFT JOIN owners ON `animals`.`owner_id` = `owners`.`id` ORDER BY animals.name ASC');
    //     return view('pets.index', compact('pets'));
    // }


    public function index(Request $request)
    {

        $animals = Animal::query();
        
        if ($request->input('Searchpet')){
            $animals = $animals->where('name', 'like', '%'. $request->input("Searchpet") . '%')->orderBy('name', 'asc');
        }
        $animals = $animals->with('owner')->get();

        return view('pets.index', compact('animals'));
    }
}
