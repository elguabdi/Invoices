<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
  
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'invoice_number',
        'product',
        'Section',
        'Status',
        'Value_Status',
        'note',
        'user',
    ];
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
