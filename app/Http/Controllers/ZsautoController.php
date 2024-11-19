<?php

namespace App\Http\Controllers;

use App\Models\zsauto;
use Illuminate\Http\Request;

class ZsautoController extends Controller
{
    public function show(){
        return zsauto::all();
    }

    public function add(Request $request)
{
    $validated = $request->validate([
        'marka' => 'required|string|max:255',
        'tipus' => 'required|string|max:255',
        'szin' => 'required|string|max:255',
        'fogyaszt' => 'required|numeric|min:0|max:15',
        'ar' => 'required|integer|min:100000|max:5000000',
    ]);

    $record = new zsauto();
    $record->fill($validated);
    $record->save();
}

public function update(Request $request, string $id)
{
    $validated = $request->validate([
        'marka' => 'sometimes|string|max:255',
        'tipus' => 'sometimes|string|max:255',
        'szin' => 'sometimes|string|max:255',
        'fogyaszt' => 'sometimes|numeric|min:0|max:15',
        'ar' => 'sometimes|integer|min:100000|max:5000000',
    ]);

    $record = zsauto::findOrFail($id); // Ensures the record exists or throws a 404
    $record->fill($validated);
    $record->save();
}


}
