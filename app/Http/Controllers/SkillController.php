<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    //

    public function index(Request $request)
    {
        $user = Auth::user();

        $query = $user->skills();

        if ($request->search) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('skills.name', 'like', '%' . $search . '%')
                    ->orWhere('skills.category', 'like', '%' . $search . '%');
            });
        }

        $skills = $query->get();

        return view('pages.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('pages.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'type' => 'required|in:offered,wanted',
        ]);

        $skill = Skill::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        Auth::user()->skills()->syncWithoutDetaching([
            $skill->id => [
                'type' => $request->type,
            ],
        ]);

        return redirect()->route('skills.index')
            ->with('success', 'Skill ajoutée avec succès');
    }

    public function edit(Skill $skill)
    {
        return view('pages.skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $skill->update($request->all());

        return redirect()->route('skills.index')
            ->with('success', 'Skill modifiée');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index')
            ->with('success', 'Skill supprimée');
    }
}
