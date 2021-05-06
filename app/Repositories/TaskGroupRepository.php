<?php


namespace App\Repositories;



use App\hyperTask\ModelRepository;
use App\TaskGroup;
use Illuminate\Database\Eloquent\Model;
class TaskGroupRepository implements ModelRepository
{


    public function save(array $data): TaskGroup
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, TaskGroup|Model $taskGroup): TaskGroup
    {
        // TODO: Implement update() method.
    }
}
