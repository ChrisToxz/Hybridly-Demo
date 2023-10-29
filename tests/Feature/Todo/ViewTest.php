<?php

use function Pest\Laravel\get;

beforeEach(function () {
    $this->user = \App\Models\User::factory()->create();
});

it('can render todo view page', function () {
    $this->actingAs($this->user)
        ->get(route('todo.index'))
        ->assertOk()
        ->assertHybrid()
        ->assertHybridView('todo.index')
        ->assertHybridProperties([
            'todos'
        ]);
});

it('loads todos and has the right properties', function () {

    $todo = \App\Models\Todo::create(['title' => 'TestTitle', 'user_id' => $this->user->id]);

    $response = $this->actingAs($this->user)
        ->get(route('todo.index'))
        ->assertOk()
        ->assertHybrid()
        ->assertHybridView('todo.index')
        ->assertHybridProperties([
            'todos'
        ]);

    expect($response->getHybridProperty('todos')[0])->toHaveKey('title', $todo->title);
});
