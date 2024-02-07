<?php

namespace Modules\Course\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Post\Models\Post;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @return void
     * @test
     */
    public function insert()
    {
        $data = Post::factory()->make()->toArray();

        Post::create($data);

        $this->assertDatabaseHas("posts" , $data);
    }
}
