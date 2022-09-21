<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
