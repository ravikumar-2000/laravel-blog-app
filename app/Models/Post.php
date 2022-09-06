<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // to be safe from mass assignment vulnerabilities
    protected $guards = ['id'];

    protected $with = ['user', 'category'];


    public function category() {
        return $this->belongsTo(Category :: class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}


?>