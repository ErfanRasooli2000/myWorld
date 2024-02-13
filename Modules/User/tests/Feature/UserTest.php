<?php

namespace Modules\User\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Post\Models\Post;
use Modules\User\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
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
        $count = rand(0,10);

        $user = User::factory()
            ->has(Post::factory()->count($count))
            ->create();

        $this->assertCount($count,$user->posts);
        $this->assertTrue($user->posts->first() instanceof Post);
    }
}
