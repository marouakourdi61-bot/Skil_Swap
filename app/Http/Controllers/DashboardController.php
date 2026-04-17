<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Skills
        $skillsOffered = $user->skills()
            ->wherePivot('type', 'offered')
            ->count();

        $skillsWanted = $user->skills()
            ->wherePivot('type', 'wanted')
            ->count();

        // Pending exchanges
        $pendingRequests = $user->sentExchanges()
            ->where('status', 'pending')
            ->count();

        // Badges 
        $badges = method_exists($user, 'badges')
            ? $user->badges()->get()
            : collect();

        // Recent activité
        $recentExchanges = $user->sentExchanges()
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'skillsOffered',
            'skillsWanted',
            'pendingRequests',
            'badges',
            'recentExchanges'
        ));
    }
}