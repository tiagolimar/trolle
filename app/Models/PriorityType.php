<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriorityType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'color',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    /**
     * Relationship: PriorityType has many Cards.
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
