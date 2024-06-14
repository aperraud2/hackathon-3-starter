<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(Request $request)
    {

        $owners = Owner::query();
        
        if ($request->input('Searchowner')){
            $owners = $owners->where('surname', 'like', '%'. $request->input("Searchowner") . '%')->orderBy('surname', 'asc')
            ->orWhere('first_name', 'like', '%'. $request->input('Searchowner') .'%');
        }
        // $owners = DB::select('SELECT owners.*, animals.name as animal_name, animals.species as species, animals.breed as breed, animals.age as age, animals.weight as `weight` FROM `owners` LEFT JOIN animals ON `owners`.`id` = `animals`.`owner_id` ORDER BY owners.surname ASC');
        $owners = $owners->with('animals')->get();
        // dd($owners[0]);
        return view('owners.index', compact('owners'));
    }

    public function create(Request $request, $id = null)
    {
        $owners = Owner::get();

        if ($id) {
            $owners = Owner::findOrFail($id);
        } else {
            $owners = new Owner;
        }

        return view('owners.index', compact('owners'));
    }


}
