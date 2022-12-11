<?php

namespace Tests;

use App\Models\User\User;
use Database\Factories\User\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class FrameworkTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @var \Database\Factories\User\UserFactory */
    protected $userFactory;

    public function setUp(): void
    {
        parent::setUp();
        $this->userFactory = User::factory();
    }
}
