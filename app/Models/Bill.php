<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bills';

    protected $fillable = ['house_id', 'status', 'date'];

    public function house() {
        return $this->belongsTo(House::class);
    }
}
