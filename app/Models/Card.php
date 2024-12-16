<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'priority_type_id',
        'title',
        'order',
        'description',
        'user_id',
        'board_id',
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
     * Relationship: Card belongs to a Board.
     */
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    /**
     * Relationship: Card belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: Card belongs to a PriorityType.
     */
    public function priorityType()
    {
        return $this->belongsTo(PriorityType::class);
    }

    /**
     * Relationship: Card has many Comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
