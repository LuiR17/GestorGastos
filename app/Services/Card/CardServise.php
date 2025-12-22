<?php

namespace App\Services\Card;

use App\Models\Accounts;
use App\Models\CreditCards;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CardServise
{
    public function getAll(): LengthAwarePaginator
    {
        $query = CreditCards::latest();
        return $query->paginate(CreditCards::PAGINATE);
    }

    public function create(array $data): CreditCards
    {
        $data['user_id'] = Auth::id();
        return CreditCards::create($data);
    }

    public function getById(string $id): CreditCards
    {
        return CreditCards::findOrFail($id);
    }
}