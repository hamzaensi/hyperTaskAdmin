<?php


namespace App\hyperTask;


use App\TaskGroup;

trait HasTaskGroups
{

    public function taskGroups(){
        return $this->morphMany(TaskGroup::class,'groupable');
    }
}
