<?php
namespace App\Clients;

use App\Models\Clients;
use Illuminate\Database\Eloquent\Collection;
class EloquentSearchRepository implements SearchRepository
{
    public function search(string $term): Collection
    {
        return Clients::query()
            ->where(fn ($query) => (
            $query->where('name', 'LIKE', "%{$term}%")
                ->orWhere('email', 'LIKE', "%{$term}%")
                ->orWhere('tags', 'LIKE', "%{$term}%")
            ))
            ->get();
    }
}
