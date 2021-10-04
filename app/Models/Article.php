<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

        public function scopeSearch(Builder $query, $params)
    {
        if (!empty($params['name'])) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        if (!empty($params['category'])) {
            $query->where('birthplace', 'like', '%' . $params['birthplace'] . '%');
        }
        return $query;
    }
}

