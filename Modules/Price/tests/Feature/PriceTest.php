<?php

namespace Modules\Price\tests\Feature;

use Modules\Price\Models\Price;
use Tests\TestCase;

class PriceTest extends TestCase
{
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
