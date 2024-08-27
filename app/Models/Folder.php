<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Expr\FuncCall;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'is_important',
        'category_id',
        'user_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
