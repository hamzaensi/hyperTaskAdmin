<?php


namespace App\Repositories;

use App\Task;
use Illuminate\Database\Eloquent\Model;
use App\hyperTask\ModelRepository;

class TaskRepository implements ModelRepository
{


    public function save(array $data): Task
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, Task|Model $task): Task
    {
        // TODO: Implement update() method.
    }
}
