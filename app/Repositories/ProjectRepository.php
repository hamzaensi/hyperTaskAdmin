<?php


namespace App\Repositories;


use App\hyperTask\ModelRepository;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectRepository implements ModelRepository
{

    public function save(array $data): Project
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, Project|Model $project): Project
    {
        // TODO: Implement update() method.
    }
}
