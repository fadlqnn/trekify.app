<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = ['tb_products'];
    protected $guarded = ['id'];

    public function distributor ()
    {
        return $this->belongsTo(distributor::class, 'id_distributor');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'id');
    }
}
