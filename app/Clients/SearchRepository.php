<?php

namespace App\Clients;

use Illuminate\Database\Eloquent\Collection;

interface SearchRepository
{
    public function search(string $query): Collection;
}
