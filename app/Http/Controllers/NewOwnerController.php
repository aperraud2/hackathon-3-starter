<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class NewOwnerController extends Controller
{
    public function index()
    {
        return view('newowners.index');
    }

    public function create(Request $request, $id = null)
    {
        $newowner = Owner::get();

        if ($id) {
            $newowner = Owner::findOrFail($id);
        } else {
            $newowner = new Owner;
        }

        return view('newowners.index', compact('newowner'));
    }

    public function store(Request $request, $id = null)
    {
               // used now:
        $request->validate([
            'first_name' => 'required',
            'surname' => 'required',
            'email',
            'phone',
        ]);
    }
}
