<?php

namespace App\Http\Controllers;

use App\Models\Spend;
use Illuminate\Http\Request;
use App\Http\Requests\Spend\CreateSpendRequest;
use App\Http\Requests\Spend\UpdateSpendRequest;
use App\Services\Spend\SpendService;
use App\Services\Account\AccountService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SpendController extends Controller
{
    public function __construct(protected SpendService $service, protected AccountService $account) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $spends = $this->service->getAll();
        $accounts = $this->account->getAll();
        return view('spend.index', compact('spends', 'accounts'));
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
    public function update(UpdateSpendRequest $request, Spend $spend)
    {
        //

       
        $spend->update($request->validated());

        return response()->json([
            'message' => 'Actualizado',
            'data' => $spend
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spend $spend)
    {
        $spend->delete();

        return response()->json([
            'message' => 'Gasto eliminado'
        ]);
    }
}
