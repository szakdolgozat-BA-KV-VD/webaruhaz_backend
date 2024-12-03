<?php

namespace App\Http\Controllers;

use App\Models\Rendeles;
use Illuminate\Http\Request;

class RendelesController extends Controller
{
    public function show()
    {
        return Rendeles::all();
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'rendszam' => ['required', 'integer', 'exists:zsautos,rendszam'],
        ]);

        $record = new Rendeles();
        $record->fill($validated);
        $record->save();
    }
   
    public function update(Request $request, Rendeles $rendeles)
    {
        //
    }

    public function destroy(string $id)
    {
        $record = Rendeles::findOrFail($id);

        $record->delete();
    }
}
