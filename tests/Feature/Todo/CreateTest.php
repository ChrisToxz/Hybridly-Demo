<?php

use function Pest\Laravel\get;

beforeEach(function () {
    $this->user = \App\Models\User::factory()->create();
});

it('can render add todo dialog', function () {
    $this->actingAs($this->user)
        ->get(route('todo.create'))
        ->assertOk()
        ->assertHybrid()
        ->assertHybridView('welcome')
        ->assertHybridDialog(
            view: 'Todo.Create',
            baseUrl: route('index')
        );
});

it('requires a valid title', function () {
    $this->actingAs($this->user)
        ->post(route('todo.store'))
        ->assertSessionHasErrors(['title', 'description']);

});
