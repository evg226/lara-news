<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategories(){
        return DB::table($this->table)->select([
            'id','title','description','created_at','image'
        ])->get();
    }

    public function getCategoryById(int $id){
        return DB::table($this->table)->select([
            'id','title','description','image','created_at','image'
        ])->find($id);
    }
}
