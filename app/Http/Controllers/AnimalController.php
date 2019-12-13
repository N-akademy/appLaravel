<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Breed;

class AnimalController extends Controller
{
    public function showAnimal()
    {
        $animal=Animal::All();
        return view('animal.table',compact('animal'));
    }

    public function create()
    {
        $breed=Breed::All();
        return view('animal.create',compact('breed'));
    }


    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'director' => 'required|max:50|string',
            'duration' => 'required|integer',
            'year' => 'required|integer|max:4',
            'genre_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect('createMovie')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type Animal qui utilisera l'hydratation
            $animal = new Animal([
                "name" => $request->name,
                "gender" => $request->gender,
                "age" => $request->age,
                "weight" => $request->weight,
                "size" => $request-size,
                "breed_id" => $request->breed_id,
            ]);

            // Hydratation en base de données et donc insertion du film
            $animal->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/animals');
        }
    }


    public function edit($id)
    {
        $breed=Breed::All();
        $animal= Animal::find($id);

        return view('animals.edit',compact('animal','breed'));

    }

    public function update(Request $request, $id)
    {

        $animal= Animal::find($id);
        $animal->name = $request->name;
        $animal->gender = $request->gender;
        $animal->age = $request->age;
        $animal->weight = $request->weight;
        $animal->size= $request-size;
        $animal->breed_id = $request->breed_id;

        $animal->save();

        return redirect('/animals');
    }
    public function delete($id)
    {
        $animal= Animal::find($id);
        $animal->delete();


        return redirect('/animals');

    }

}
