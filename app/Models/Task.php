<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'task_id';
    protected $fillable = [
        'title',
        'body',
        'status',
        'user'
      ];

    static function get_all_tasks(){
        $result=DB::table('tasks as t')
                ->select('t.title','t.body','t.status','t.task_id','t.user','u.id','u.name')
                ->join('users as u','t.user','=','u.id')
                ->get();
        return $result;
    }
}
