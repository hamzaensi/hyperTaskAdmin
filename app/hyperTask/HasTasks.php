<?php


namespace App\hyperTask;


trait HasTasks
{

    public function tasks(){
        return $this->morphMany(Task::class,'taskable');
    }
}
