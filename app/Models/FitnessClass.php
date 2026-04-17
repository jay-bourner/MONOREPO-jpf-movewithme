<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FitnessClass extends Model
{
    /** @use HasFactory<\Database\Factories\FitnessClassFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'short_description',
        'description',
        'start_date',
        'notes',
        'image',
        'status',
        'image_description'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    // public function fitnessClassOptions(): HasMany {
    //     return $this->hasMany(FitnessClassOption::class);
    // }
}
