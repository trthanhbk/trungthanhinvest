<?php namespace Prototype\BaseClasses;

abstract class AbstractEloquentRepository
{
    
    /**
     * Return all users
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all() {
        return $this->model->all();
    }

    /**
     * Make a new instance of the entity to query on
     *
     * @param array $with
     */
    public function make(array $with = array()) {
        return $this->model->with($with);
    }
    
    /**
     * Find an entity by id
     *
     * @param int $id
     * @param array $with
     * @return Illuminate\Database\Eloquent\Model
     */
    public function getById($id, array $with = array()) {
        $query = $this->make($with);
        
        return $query->find($id);
    }
    
    /**
     * Find a single entity by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getFirstBy($key, $value, array $with = array()) {
        return $this->make($with)->where($key, '=', $value)->first();
    }
    
    /**
     * Find many entities by key value
     *
     * @param string $key
     * @param string $value
     * @param array $with
     */
    public function getManyBy($key, $value, array $with = array()) {
        return $this->make($with)->where($key, '=', $value)->get();
    }
    
    /**
     * Get Results by Page
     *
     * @param int $page
     * @param int $limit
     * @param array $with
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function getByPage($page = 1, $limit = 10, $with = array()) {
        $result = new StdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();
        
        $query = $this->make($with);
        
        $model = $query->skip($limit * ($page - 1))->take($limit)->get();
        
        $result->totalItems = $this->model->count();
        $result->items = $model->all();
        
        return $result;
    }
    
    /**
     * Return all results that have a required relationship
     *
     * @param string $relation
     */
    public function has($relation, array $with = array()) {
        $entity = $this->make($with);
        
        return $entity->has($relation)->get();
    }

    /**
     * Create new model
     *
     * @internal param array $input
     * @return bool
     */
    public function save() {
        $className = get_class($this->model);
        $object = new $className;

        if ( ! $object->save() )
            return $object;

        return true;
    }
    
}
