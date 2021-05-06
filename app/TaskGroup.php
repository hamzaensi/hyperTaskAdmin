<?php

namespace App;

use App\hyperTask\HasTasks;
use Illuminate\Database\Eloquent\Model;

class TaskGroup extends Model
{
    use HasTasks;
    protected $guarded = [];


    public function groupable (){
        return $this->morphTo();
    }

}
