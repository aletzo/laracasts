<?php

namespace Tests\Feature;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    
    use DatabaseTransactions;

    public function testPostsReturnsStatus200Test()
    {
        $this->get('/posts')->assertStatus(200);
    }

    public function testPostsHasHeaderMyBlogOfYeahTest()
    {
        $this->get('/posts')->assertSee('My Blog of yeah');
    }

    public function testPostArchivesReturns2GroupsTest()
    {
        $first  = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $archives = Post::archives()->toArray();

        $this->assertEquals([
            [
                "count" => 3,
                "month" => $first->created_at->format('F'),
                "year"  => $first->created_at->format('Y')
            ],
            [
                "count" => 3,
                "month" => $second->created_at->format('F'),
                "year"  => $second->created_at->format('Y')
            ]
        ], $archives);
    }

}
