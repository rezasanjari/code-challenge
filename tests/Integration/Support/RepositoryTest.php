<?php

namespace Tests\Integration\Support;

use App\Models\User\User;
use App\Repositories\UserRepository;
use Tests\FrameworkTest;

class RepositoryTest extends FrameworkTest
{
    /** @var UserRepository */
    private $repository;

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = app(UserRepository::class);
    }

    public function testAll()
    {
        $this->assertEquals(User::get(), $this->repository->all());
    }

    public function testCreate()
    {
        $user = $this->userFactory->create();
        $this->assertInstanceOf(User::class, $user);
    }

    public function testUpdate()
    {
        $user = $this->userFactory->create();
        $this->assertInstanceOf(User::class, $user);
        $this->repository->update(['name' => 'Luke Skywalker'], $user->id);
        $this->assertEquals('Luke Skywalker', $user->refresh()->name);
    }

    public function testDelete()
    {
        $user = $this->userFactory->create();
        $this->repository->delete($user->id);
        $this->assertFalse(User::where('id', $user->id)->exists());
    }

    public function testFind()
    {
        $user  = $this->userFactory->create();
        $found = $this->repository->find($user->id);
        $this->assertInstanceOf(User::class, $found);
        $this->assertEquals($user->id, $found->id);
    }
}
