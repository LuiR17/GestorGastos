<?php

namespace App\Http\Controllers;

use App\Models\Spend;
use Illuminate\Http\Request;
use App\Http\Requests\Spend\CreateSpendRequest;
use App\Services\Spend\SpendService;
use App\Models\User;

class SpendController extends Controller
{
    public function __construct(protected SpendService $service)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spends = $this->service->getAll();
        return view('spend.index', compact('spends'));
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
    public function store(CreateSpendRequest $request)
    {
        $spend = $this->service->create($request->validated());

        return response()->json([
            'message' => 'Gasto creado correctamente',
            'data' => $spend
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Spend $spend)
    {
        //
        return response()->json([
            'data' => $spend
        ]);

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
