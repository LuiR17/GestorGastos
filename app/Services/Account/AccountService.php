<?php

namespace App\Services\Account;

use App\Models\Accounts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AccountService 
{
    public function getAll(): LengthAwarePaginator
    {
        $query = Accounts::latest();
        return $query->paginate(Accounts::PAGINATE);

    }

    public function create(array $data): Accounts
    {
        $data['user_id'] = Auth::id();
        return Accounts::create($data); 
    }

    public function getById(string $id): Accounts
    {
        return Accounts::findOrFail($id);
    }
}