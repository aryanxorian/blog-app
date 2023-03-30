<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $guarded= ['id'];
    protected $with =["category","author"];

    public function category()
    {
        //hasOne,hasMany,belongsTO,belongsToMany
        return $this->belongsTo(Category::class);

    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function scopeFilter($query, array $filters){
    
        $query->when($filters['search']?? false ,function($query,$search){
            //query the db
            $query->where('title','like','%'.$search.'%')
            ->orWhere('body','like','%'.$search.'%');
        });
    }
}
