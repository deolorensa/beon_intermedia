<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = 'houses';

    protected $fillable = ['name', 'phone_number', 'status', 'active_period'];

    public function bill() {
        return $this->hasMany(Bill::class, 'house_id');
    }
}
