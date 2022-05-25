<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters){
    
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'.$search.'%')
                  -> orWhere('body','like','%'.$search.'%');  
        });

        $query->when($filters['category']??false,function($query,$category){
            return $query->whereHas('category',function($query) use($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filters['university']??false,function($query,$university){
            return $query->whereHas('university',function($query) use($university){
                $query->where('slug',$university);
            });
        });

        $query->when($filters['user']??false, fn($query, $user)=>
            $query->whereHas('user',fn($query)=>
                $query->where('name',$user)
            )
    );
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
