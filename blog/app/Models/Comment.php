<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    // relacion inversa Coments-users 
    public function user(){
        return $this->belongsTo(User::class);
    }

    // relacion inversa Coments-articles 
    public function article(){
        return $this->belongsTo(Article::class);
    }    


}
