<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    //

    public function index(Request $request)
    {
        $query = Skill::query();

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('category', 'like', '%' . $request->search . '%');
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
            'description' => 'nullable|string'
        ]);

        Skill::create($request->all());

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
