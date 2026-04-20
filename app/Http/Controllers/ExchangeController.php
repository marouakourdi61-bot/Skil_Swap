<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exchange;

class ExchangeController extends Controller
{
    /**
     * Display a listing of exchanges
     */
    public function index()
    {
        $exchanges = \App\Models\Exchange::with(['sender', 'receiver', 'skillOffered', 'skillWanted'])
            ->latest()
            ->get();

        return view('pages.exchanges.index', compact('exchanges'));
    }

    /**
     * Show form to create exchange
     */
    public function create()
    {
        return view('pages.exchanges.create');
        
    }

    /**
     * Store new exchange
     */
    public function store(Request $request)
    {
        $request->validate([
            'offered_skill' => 'required|string|max:255',
            'wanted_skill' => 'required|string|max:255',
            'message' => 'nullable|string',
            'status' => 'required|string'
        ]);

        Exchange::create($request->all());

        return redirect()->route('pages.exchanges.index')
            ->with('success', 'Exchange ajouté');
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
        $request->validate([
            'status' => 'required|in:pending,accepted,rejected'
        ]);

        $exchange->update([
            'status' => $request->status
        ]);

        return redirect()->route('pages.exchanges.index')
            ->with('success', 'Exchange updated successfully');
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