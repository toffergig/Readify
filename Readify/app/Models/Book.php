<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    public $table = 'books';
    protected $fillable = ['title', 'genre', 'author', 'condition','volume','email', 'user_id', 'website', 'phone', 'description', 'bookImg'];

    public function scopeFilter($query, array $filters){
        if($filters['genre'] ?? false){
            $query->where('genre', 'like', '%' . request('genre') . '%');
        }

        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')
             ->orWhere('description', 'like', '%' . request('search') . '%')
             ->orWhere('genre', 'like', '%' . request('search') . '%');
        }
    }
    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
