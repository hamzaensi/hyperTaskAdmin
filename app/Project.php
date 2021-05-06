<?php

namespace App;

use App\hyperTask\HasTaskGroups;
use App\hyperTask\HasTasks;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasTasks , HasTaskGroups;
    protected  $guarded = [];


    public function user(){

        return $this->belongsTo(User::class);
    }
}
