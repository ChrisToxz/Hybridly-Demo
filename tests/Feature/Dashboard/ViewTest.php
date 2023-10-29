<?php

use function Pest\Laravel\get;

beforeEach(function () {
    $this->user = \App\Models\User::factory()->create();
});

it('can renders dashboard', function () {
    $this->actingAs($this->user)
        ->get(route('dashboard'))
        ->assertOk()
        ->assertHybrid()
        ->assertHybridView('dashboard');
});

it('renders items on the dashboard', function () {
    $this->actingAs($this->user)
        ->get(route('dashboard'))
        ->assertOk()
        ->assertHybrid()
        ->assertHybridView('dashboard')
        ->assertHybridProperties([
            'items'
        ]);

});
