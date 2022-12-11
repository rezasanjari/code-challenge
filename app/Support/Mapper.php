<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Mapper
{
    abstract public function single(Model $model): array;

    public function collection(Collection $collection): array
    {
        return $collection->map(
            function ($item) {
                return $this->single($item);
            }
        )->toArray();
    }
}
