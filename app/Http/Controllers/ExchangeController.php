<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exchange;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Validation\Rule;

class ExchangeController extends Controller
{
    /**
     * Display a listing of exchanges
     */
    public function index()
    {
        $exchanges = Exchange::with(['sender', 'receiver', 'skillOffered', 'skillWanted'])
            ->where('receiver_id', auth()->id())
            ->where('status', 'pending')
            ->latest()
            ->get();

        $acceptedExchanges = Exchange::with(['sender', 'receiver', 'skillOffered', 'skillWanted'])
            ->where('status', 'accepted')
            ->where(function ($q) {
                $q->where('sender_id', auth()->id())
                    ->orWhere('receiver_id', auth()->id());
            })
            ->latest()
            ->get();

        return view('pages.exchanges.index', compact('exchanges', 'acceptedExchanges'));
    }

    /**
     * Show form to create exchange
     */
    public function create()
    {
        $users = User::query()
            ->where('id', '!=', auth()->id())
            ->orderBy('name')
            ->get();

        $receiverId = request('receiver_id');

        $myOfferedSkills = auth()->user()
            ->skills()
            ->wherePivot('type', 'offered')
            ->orderBy('skills.name')
            ->get();

        $receiver = null;
        $receiverSkills = collect();

        if ($receiverId) {
            $receiver = User::with(['skills' => function ($q) {
                $q->wherePivot('type', 'offered')->orderBy('skills.name');
            }])->whereKey($receiverId)->first();

            if ($receiver && $receiver->id !== auth()->id()) {
                $receiverSkills = $receiver->skills;
            }
        }

        return view('pages.exchanges.create', compact(
            'users',
            'receiverId',
            'myOfferedSkills',
            'receiverSkills',
            'receiver'
        ));
        
    }

    /**
     * Store new exchange
     */
    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id|not_in:' . auth()->id(),
            'skill_offered_id' => [
                'required',
                'integer',
                Rule::exists('user_skills', 'skill_id')->where(fn ($q) => $q
                    ->where('user_id', auth()->id())
                    ->where('type', 'offered')
                ),
            ],
            
            'skill_wanted_id' => [
                'required',
                'integer',
                'different:skill_offered_id',
                Rule::exists('user_skills', 'skill_id')->where(fn ($q) => $q
                    ->where('user_id', $request->receiver_id)
                    ->where('type', 'offered')
                ),
            ],
            'message' => 'nullable|string|max:1000',
        ]);

        Exchange::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'skill_id' => $request->skill_offered_id,
            'skill_offered_id' => $request->skill_offered_id,
            'skill_wanted_id' => $request->skill_wanted_id,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        return redirect()->route('exchanges.index')
            ->with('success', 'Demande envoyée');
    }

    public function show(Exchange $exchange)
    {
        abort_unless(
            $exchange->sender_id === auth()->id() || $exchange->receiver_id === auth()->id(),
            403
        );

        $exchange->load(['sender', 'receiver', 'skillOffered', 'skillWanted']);

        return view('pages.exchanges.show', compact('exchange'));
    }

    /**
     * Show edit form
     */
    public function edit(Exchange $exchange)
    {
        return view('pages.exchanges.edit', compact('exchange'));
    }

    /**
     * Update exchange
     */
    public function update(Request $request, Exchange $exchange)
    {
        abort_unless($exchange->receiver_id === auth()->id(), 403);

        $request->validate([
            'status' => 'required|in:pending,accepted,rejected'
        ]);

        $exchange->update([
            'status' => $request->status
        ]);

        return redirect()->route('exchanges.index')
            ->with('success', 'Statut mis à jour');
    }

    /**
     * Delete exchange
     */
    public function destroy(Exchange $exchange)
    {
        $exchange->delete();

        return redirect()->route('pages.exchanges.index')
            ->with('success', 'Exchange supprimé');
    }
}