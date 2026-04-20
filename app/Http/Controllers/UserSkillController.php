<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class UserSkillController extends Controller
{

    //
    public function index()
    {
        $user = Auth::user();

        $skills = Skill::all();

        $mySkills = $user->skills;

        return view('user_skills.index', compact('skills', 'mySkills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'type' => 'required|in:offered,wanted'
        ]);

        Auth::user()->skills()->attach($request->skill_id, [
            'type' => $request->type
        ]);

        return back()->with('success', 'Skill ajoutée');
    }

    public function destroy(Skill $skill)
    {
        Auth::user()->skills()->detach($skill->id);

        return back()->with('success', 'Skill supprimée');
    }
}
