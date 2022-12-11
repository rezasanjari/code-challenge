<?php

namespace App\Repositories;

use App\Models\User\User;
use App\Support\Repository;
use Illuminate\Database\Eloquent\Collection;

/**
 * @method User[]|Collection all(array $columns = ['*'])
 * @method User create(array $data)
 * @method User update(array $data, int $id, string $attribute = "id")
 * @method int delete(int $id)
 * @method User find(int $id, array $columns = ['*'])
 */
class UserRepository extends Repository
{
    protected function getModelClassName(): string
    {
        return User::class;
    }
}
