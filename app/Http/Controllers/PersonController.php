<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Person;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $person = Person::name($request->name)
        ->cpfcnpj($request->cpf_cnpj)
        ->paginate(config('helpers.results_per_page'));

        return view('peoples.index', compact('person'));
    }

    public function create()
    {
        return view('peoples.create');
    }

    public function store(Request $request)
    {
        Person::create($request->all());
        return redirect()->route('person.create');
    }
    
    public function edit($id)
    {
        $person = Person::findOrFail($id);

        return view('peoples.edit', compact('person'));
    }

    public function update(Request $request)
    {   
        $input = $request->all();

        $person = Person::findOrFail($request->id);
        $person->update($input);

        return redirect()->route('person.index');
    }

    public function destroy($id){

        $person = Person::findOrFail($id);
        
        $person->delete();

        return redirect()->route('person.index');
    }
}
