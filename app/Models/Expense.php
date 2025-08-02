<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'change',
        'amount',
        'note',
        'receipt_image',
        'parsed_data',
    ];

    public function items()
    {
        return $this->hasMany(ExpenseItem::class, 'expenses_id');
    }
}
