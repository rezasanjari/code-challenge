<?php

namespace App\Mappers;

use App\Models\User\User;
use App\Support\Mapper;
use Illuminate\Database\Eloquent\Model;

class UserMapper extends Mapper
{
    public function __construct()
    {
    }

    /**
     * @OA\Schema(
     *     schema="UserMapper",
     *     title="UserMapper",
     *     @OA\Property(
     *         property="id",
     *         type="integer",
     *         description="User ID",
     *         example=1
     *     ),
     *     @OA\Property(
     *         property="email",
     *         type="string",
     *         description="email",
     *         example="JaneDoe@email.com",
     *     ),
     *     @OA\Property(
     *         property="name",
     *         type="string",
     *         description="name",
     *         example="Jane Doe",
     *     ),
     * ),
     *
     * @param User|Model $user
     *
     * @return array
     */
    public function single(Model $user): array
    {
        /** @var User $user */
        return [
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email,
        ];
    }
}
