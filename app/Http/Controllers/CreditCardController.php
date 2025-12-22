<?php

namespace App\Http\Controllers;

use App\Http\Requests\Card\CreateCardRequest;
use App\Services\Card\CardServise;
use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    public function __construct(protected CardServise $card_service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $creditcard = $this->card_service->getAll();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCardRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();

        $creditcard = $this->card_service->create($validatedData);

        return response()->json([
            'message' => 'Targeta de credito creada',
            'data' => $creditcard
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
