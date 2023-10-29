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
        ->assertHybridView('dashboard')
        ->assertHybridDialog(
            view: 'todo.create',
            baseUrl: route('dashboard')
        );
});

it('requires a valid title', function () {
    $this->actingAs($this->user)
        ->post(route('todo.store'))
        ->assertSessionHasErrors(['title']);

});
