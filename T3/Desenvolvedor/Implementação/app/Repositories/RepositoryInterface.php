<?php

interface RepositoryInterface {

    public function create(array $attributes);

    public function firstOrCreate(array $attributes);

    public function all($columns = array('*'));

    public function paginate($limit = array('*'));

    public function find($id, $columns = array('*'));

    public function destroy($ids);

}