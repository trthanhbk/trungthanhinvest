<?php namespace Prototype\Interfaces;


interface BaseRepositoryInterface {
    public function all();
    public function getById($id, array $with = array());
    public function getFirstBy($key, $value, array $with = array());
    public function getManyBy($key, $value, array $with = array());
    public function getByPage($page = 1, $limit = 10, $with = array());
    public function has($relation, array $with = array());
    public function save();
}