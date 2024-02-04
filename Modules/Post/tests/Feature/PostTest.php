<?php

namespace Modules\Post\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Post\Models\Post;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return void
     * @test
     */
    public function insertData()
    {
        $data = Post::factory()->make()->toArray();

        Post::create($data);

        $this->assertDatabaseCount("posts",1);
        $this->assertDatabaseHas('posts' , $data);
    }
}

