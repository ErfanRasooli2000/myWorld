<?php

namespace Modules\Course\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Course\Models\Course;
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
        $data = Course::factory()->make()->toArray();

        Course::create($data);

        $this->assertDatabaseHas("courses" , $data);
    }
}
