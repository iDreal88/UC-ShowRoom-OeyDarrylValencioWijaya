<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Define Relation
    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define Relation
    public function Vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
