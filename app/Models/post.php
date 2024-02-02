<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function mice()
    {
        return $this->belongsTo(Mouse::class,"product_id");
    }
    public function keyboards()
    {
        return $this->belongsTo(Keyboard::class,"product_id");
    }
    public function headset()
    {
        return $this->belongsTo(Headset::class,"product_id");
    }
}