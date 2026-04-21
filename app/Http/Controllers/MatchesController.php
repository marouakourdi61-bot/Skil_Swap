<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MatchesController extends Controller
{
    public function index()
{
    $users = User::with('skills')->get();


    return view('pages.matches.index', compact('users'));
}

    public function search(Request $request)
    {
        $search = $request->search;

        $users = User::with('skills')
            ->where('id', '!=', auth()->id())
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                      ->orWhereHas('skills', function ($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      });
            })
            ->get();
        
        return view('pages.matches.partials.users', compact('users'));
    }
}