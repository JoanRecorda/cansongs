<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Song;
use function GuzzleHttp\Promise\all;

class SongTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_songCanBeCreatedByFactory()
    {
        Song::factory()->create();
        $this->assertEquals(1, Song::all()->count());
    }

   

    public function test_listOfSongsCanBeRetrieved()
    {
        Song::factory(2)->create();
        $response = $this->get('/songs');

        $response->assertStatus(200);
        $this->assertEquals(2, Song::all()->count());
    }
}
