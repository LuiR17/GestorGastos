<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Account\CreateAccountRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Http\Requests\Spend\UpdateSpendRequest;
use App\Models\Accounts;
use App\Services\Account\AccountService;

class AccountController extends Controller
{
    public function __construct(protected AccountService $service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $accounts = $this->service->getAll();
        return view('spend.index', compact('accounts'));
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
    public function store(CreateAccountRequest $request)
    {
        $account = $this->service->create($request->validated());

        return response()->json([
            'message' => 'Cuenta creada correctamente',
            'data' => $account
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $account = $this->service->getById($id);

        return response()->json([
            'data' => $account
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
    public function update(UpdateAccountRequest $request, Accounts $account)
    {
        //
        $account->update($request->validated());

        return response()->json([
            'message' => 'Actualizado',
            'data' => $account
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
