<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sources extends Model
{
    use HasFactory;

    protected $table = 'sources';

    public function getSources(){
        return DB::table($this->table)->select([
            'id','name','description','created_at'
        ])->get();
    }

    public function getSourcesById(int $id){
        return DB::table($this->table)->select([
            'id','name','description','home_page','created_at'
        ])->find($id);
    }
}
