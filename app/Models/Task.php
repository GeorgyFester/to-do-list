<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = ['name', 'description', 'tag_id'];

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'id');
    }
}
