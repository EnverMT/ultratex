<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Picture extends Model
{
    use HasFactory;

    protected $table = 'pictures';
    protected $guarded = false;

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
