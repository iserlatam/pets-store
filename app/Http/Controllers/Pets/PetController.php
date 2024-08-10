<?php

namespace App\Http\Controllers\Pets;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        // Find all pets where the age < 8
        $pets = Pet::where('age', '<', 8)
            ->orderBy('age', 'desc')
            ->get();

        return view('pets');

    }

    public function show(string $id)
    {
        $pet = Pet::findOrFail($id);

        return view('pets.show', [
            'pet' => $pet,
        ]);
    }
}
