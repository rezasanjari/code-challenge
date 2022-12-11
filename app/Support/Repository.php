<?php

namespace App\Support;

use App\Support\Exceptions\RepositoryException;
use Eloquent;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 *
 * @package Carrot\Support
 *
 */
abstract class Repository
{
    /**
     * @var Eloquent|Model
     */
    private $model;


    /**
     * @throws RepositoryException
     */
    public function __construct()
    {
        $this->bindModel();
    }


    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract protected function getModelClassName(): string;


    /**
     * @throws RepositoryException
     */
    public function bindModel()
    {
        $model = app($this->getModelClassName());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->getModelClassName()} must be an instance of " . Model::class);
        }

        $this->model = $model;
    }


    /**
     * @return Eloquent|Model
     */
    public function getModel()
    {
        return $this->model;
    }


    /**
     * @param array $columns
     *
     * @return Collection|Model[]|Eloquent[]
     */
    public function all(array $columns = ['*'])
    {
        return $this->getModel()->get($columns);
    }


    public function count(): int
    {
        return $this->getModel()->count();
    }


    /**
     * @param array $data
     *
     * @return Model|Eloquent
     */
    public function create(array $data)
    {
        return $this->getModel()->create($data);
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     *
     * @return Model|Eloquent
     */
    public function update(array $data, int|string $id, string $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function delete(int $id): int
    {
        return $this->getModel()->destroy($id);
    }


    /**
     * @param int[] $ids
     *
     * @return bool
     */
    public function exists(array $ids)
    {
        return $this->model->whereIn('id', $ids)->exists();
    }


    /**
     * @param mixed $id
     * @param array $columns
     *
     * @return Model|Model[]|Eloquent|Eloquent[]|Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id, array $columns = ['*'])
    {
        return $this->getModel()->find($id, $columns);
    }


    /**
     * @param array $columns
     *
     * @return Model|Eloquent
     */
    public function first(array $columns = ['*'])
    {
        return $this->getModel()->first($columns);
    }


    public function firstOrCreate(array $attributes, array $values = []): Model
    {
        return $this->getModel()->firstOrCreate($attributes, $values);
    }


    public function firstOrNew(array $attributes, array $values = []): Model
    {
        return $this->getModel()->firstOrNew($attributes, $values);
    }
}
