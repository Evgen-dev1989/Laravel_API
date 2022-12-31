<?php

namespace App\Models;

use App\Search\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    use Searchable;
    protected $casts = [
        'tags' => 'json',
    ];

    /**
     * @return array
     */
    public function toElasticsearchDocumentArray(): array
    {
        // TODO: Implement toElasticsearchDocumentArray() method.
    }
}

