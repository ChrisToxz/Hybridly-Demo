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

//it('renders items on the todo view page', function () {
//    $this->actingAs($this->user)
//        ->get(route('todo.index'))
//        ->assertOk()
//        ->assertHybrid()
//        ->assertHybridView('todo.index')
//        ->assertHybridProperties([
//            'items'
//        ]);
//
//});
