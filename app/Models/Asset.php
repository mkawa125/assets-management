<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'assets';

    protected $fillable = ['type_id', 'purchase_date', 'status', 'user_id'];
    
    public function type()
    {
        return $this->belongsTo(AssetType::class, 'type_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
    
}
