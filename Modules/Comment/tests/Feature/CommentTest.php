<?php

namespace Modules\Comment\tests\Feature;

use Modules\Comment\Models\Comment;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function insertData()
    {
        $data = Comment::factory()->make()->toArray();

        Comment::create($data);

        $this->assertDatabaseHas('comments',$data);
    }
}
