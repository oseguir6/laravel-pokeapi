<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    // Obtener la lista de todos los Pokémon con sus relaciones (types, abilities, stats, etc.)
    public function index()
    {
        // Obtener todos los Pokémon y cargar su tipo asociado
        $pokemons = Pokemon::with('tipus')->get();
        return response()->json([
            "success" => true,
            "data" => $pokemons
        ]);
    }

    // Obtener un Pokémon específico por su ID con todas sus relaciones
    public function show($id)
    {
        $pokemon = Pokemon::with('tipus')->findOrFail($id);
        return response()->json([
            "success" => true,
            "data" => $pokemon
        ]);
    }

    // Crear un nuevo Pokémon
    public function store(Request $request)
    {
        // Validar los datos que vienen del request
        $validated = $request->validate([
            'nom' => 'required|string',
            'sprite' => 'required|string',
            'alcada' => 'required|numeric',
            'pes' => 'required|numeric',
            'base_experience' => 'required|integer',
            'habitat' => 'nullable|string',
            'back_color' => 'required|string',
            'tipus_id' => 'required|exists:tipuses,id', // Validar que el tipus_id exista en la tabla tipuses
        ]);

        // Crear un nuevo Pokémon con los datos validados
        $pokemon = Pokemon::create($validated);

        return response()->json($pokemon, 201); // 201: Resource created
    }

    // Actualizar un Pokémon
    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        // Validar los datos que vienen del request
        $validated = $request->validate([
            'nom' => 'sometimes|string',
            'sprite' => 'sometimes|string',
            'alcada' => 'sometimes|numeric',
            'pes' => 'sometimes|numeric',
            'base_experience' => 'sometimes|integer',
            'habitat' => 'nullable|string',
            'back_color' => 'sometimes|string',
            'tipus_id' => 'sometimes|exists:tipuses,id', // Validar que el tipus_id exista en la tabla tipuses
        ]);

        // Actualizar el Pokémon con los datos validados
        $pokemon->update($validated);

        return response()->json($pokemon);
    }

    // Eliminar un Pokémon
    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return response()->json(null, 204); // 204: No content
    }
}
