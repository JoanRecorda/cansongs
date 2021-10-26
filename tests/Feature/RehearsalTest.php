<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Rehearsal;
use function GuzzleHttp\Promise\all;

class RehearsalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_rehearsalCanBeCreatedByFactory()
    {
        Rehearsal::factory(3)->create();
        $this->assertEquals(3, Rehearsal::all()->count());
    }


}
