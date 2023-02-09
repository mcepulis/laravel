<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    use HasFactory;
    // protected $primaryKey = 'category_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = [
        'name',
        'enabled'
    ];
    protected $attributes = [
        'enabled' => false
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
