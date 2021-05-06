<?php


namespace App\hyperTask;


use Illuminate\Http\Request;

interface Apipable
{

    public function index();
    public function show(Model $model);
    public function store(Request $request, ModelRepository  $ModelRepository);
    public function update(Model $model, Request $request , ModelRepository $ModelRepository);
    public function delete(Model $model);

}
