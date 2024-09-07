<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteProject extends Model
{
    use HasFactory;

    public function quote()
    {
        return $this->belongsTo(Quote::class, 'quote_id', 'id');
    }
}
