<?php

namespace Modules\User\tests\Feature;

use Modules\User\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function insertData()
    {
        $data = User::factory()->make()->toArray();

        $data["password"] = 123456;

        User::create($data);

        $this->assertDatabaseHas("users" , $data);
    }
}
