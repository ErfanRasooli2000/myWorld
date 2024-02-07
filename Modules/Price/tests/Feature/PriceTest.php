<?php

namespace Modules\Price\tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Price\Models\Price;
use Tests\TestCase;

class PriceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     * @test
     */
    public function insert()
    {
        $data = Price::factory()->make()->toArray();

        Price::create($data);

        $this->assertDatabaseHas("prices" , $data);
    }
}
