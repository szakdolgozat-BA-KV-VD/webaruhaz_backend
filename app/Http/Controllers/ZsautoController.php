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
        'marka' => ['required','string', 'max:255'],
        'tipus' => ['required', 'string', 'max:255'],
        'szin' => ['required', 'string', 'max:255'],
        'fogyaszt' => ['required', 'numeric', 'min:0', 'max:15'],
        'ar' => ['required', 'integer', 'min:100000', 'max:10000000']
    ]);

    $record = new zsauto();
    $record->fill($validated);
    $record->save();
}

public function update(Request $request, string $id)
{
    $rules = [];

    if ($request->has('marka')) {
        $rules['marka'] = ['required', 'string', 'max:255'];
    }
    if ($request->has('tipus')) {
        $rules['tipus'] = ['required', 'string', 'max:255'];
    }
    if ($request->has('szin')) {
        $rules['szin'] = ['required', 'string', 'max:255'];
    }
    if ($request->has('fogyaszt')) {
        $rules['fogyaszt'] = ['required', 'numeric', 'min:0', 'max:15'];
    }
    if ($request->has('ar')) {
        $rules['ar'] = ['required', 'integer', 'min:100000', 'max:10000000'];
    }

    $validated = $request->validate($rules);
    $record = zsauto::findOrFail($id); 
    $record->fill($validated);
    $record->save();
}

public function destroy(string $id)
{
    $record = zsauto::findOrFail($id);

    $record->delete();
}

}
