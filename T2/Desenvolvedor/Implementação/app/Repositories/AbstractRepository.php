<?php

abstract class AbstractRepository implements RepositoryInterface {

    protected $modelClassName;

    public function create(array $attributes)
    {
        return call_user_func_array("{$this->modelClassName}::create", array($attributes));
    }

    public function firstOrCreate(array $attributes)
    {
        return call_user_func_array("{$this->modelClassName}::firstOrCreate", array($attributes));
    }

    public function all($columns = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::all", array($columns));
    }

    public function paginate($limit = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::simplePaginate", array($limit));
    }

    public function find($id, $columns = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::find", array($id, $columns));
    }

    public function destroy($ids)
    {
        return call_user_func_array("{$this->modelClassName}::destroy", array($ids));
    }

}