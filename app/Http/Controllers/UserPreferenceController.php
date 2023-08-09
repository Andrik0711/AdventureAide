<?php

namespace App\Http\Controllers;
use App\Models\UserPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPreferenceController extends Controller
{
    public function create()
    {
        return view('autentication.user_preferences');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'allergy_type' => 'nullable|string',
            'diet_type' => 'required|in:vegan,vegetarian,carnivore',
        ]);
        
        UserPreference::create([
            'user_id' => Auth::id(),
            'has_allergies' => $request->has('has_allergies') ? $request->has_allergies : false,
            'allergy_type' => $request->allergy_type,
            'diet_type' => $request->diet_type,
        ]);

        return redirect()->route('irALugarEspecifico', auth()->user());
        //return redirect()->route('')->with('success', 'Preferences saved successfully!');
    }
}
