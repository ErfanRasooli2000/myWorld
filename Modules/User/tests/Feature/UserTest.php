<?php

namespace Modules\User\tests\Feature;

use Modules\User\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function insertData()
    {
        $data = User::factory()->make()->toArray();

        User::create($data);

        $this->assertDatabaseHas("users" , $data);
    }
}
