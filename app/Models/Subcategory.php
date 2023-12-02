<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // masih on progress
    public function menus()
    {
        return $this->hasMany(Menu::class, 'subcategory_id');
    }
}
