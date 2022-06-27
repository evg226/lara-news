<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';

    public function getNews(){
        return DB::table($this->table)->select([
            'id','title','description','published_at','category_id','image','author'
        ])->get();
    }

    public function getNewsByCategoryId(int $category_id){
        return DB::table($this->table)
            ->join('categories','categories.id','=',$this->table.'.category_id')
            ->where(['category_id'=>$category_id])
            ->get(['news.*','categories.title as category_title']);
    }

    public function getNewsById(int $id){
        return DB::table($this->table)
            ->join('categories','categories.id','=',$this->table.'.category_id')
            ->where(['news.id'=>$id])
            ->get(['news.*','categories.title as category_title'])[0];
    }
}
