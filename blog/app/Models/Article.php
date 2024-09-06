<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    // relacion inversa Artcles-users 

    public function user(){
        return $this->belongsTo(User::class);
    }

    // relacion articulos-comentarios 

    public Function comments(){
        return $this->hasMany(Comment::class);
    }

    // relacion inversa category-article
    public Function category(){
        return $this->belongsTo(Category::class);
    }
}
