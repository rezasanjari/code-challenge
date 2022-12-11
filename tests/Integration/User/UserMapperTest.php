<?php

namespace Tests\Integration\User;

use App\Mappers\UserMapper;
use App\Models\User\User;
use Illuminate\Support\Facades\Hash;
use Tests\FrameworkTest;

class UserMapperTest extends FrameworkTest
{
    /** @var UserMapper */
    private $userMapper;

    public function setUp(): void
    {
        parent::setUp();
        $this->userMapper = app(UserMapper::class);
    }

    public function testUserMapper()
    {
        /** @var User $user */
        $user = $this->userFactory->create([
            'name'     => 'Anakin Skywalker',
            'email'    => 'Vader@Empire.com',
            'password' => Hash::make('IHateSand123'),
        ]);
        $result = $this->userMapper->single($user);
        $this->assertEquals(
            [
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
            ],
            $result
        );
    }
}
