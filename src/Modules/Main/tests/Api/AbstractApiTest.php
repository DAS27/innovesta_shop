<?php

declare(strict_types=1);

namespace Innovesta\Main\Tests\Api;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Innovesta\User\Database\Factories\UserFactory;
use Innovesta\User\Models\UserModel;

class AbstractApiTest extends TestCase
{
    use DatabaseTransactions;

    protected function createUserAndToken(): string
    {
        /** @var UserModel $user */
        $user = UserFactory::new()->create();
        return $user->createToken('Production token')->plainTextToken;
    }
}
