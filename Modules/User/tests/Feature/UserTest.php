<?php

namespace Modules\User\tests\Feature;

use Modules\Post\Models\Post;
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

    /**
     * @return void
     * @test
     */
    public function userRelationshipWithPost()
    {
        $count = round(0,10);

        $user = User::factory()
            ->hasPosts($count)
            ->create();

        $this->assertCount($count,$user->posts);
        $this->assertTrue($user->posts->first() instanceof Post);
    }
}
