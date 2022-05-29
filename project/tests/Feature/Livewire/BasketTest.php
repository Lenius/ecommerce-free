<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Basket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class BasketTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Basket::class);

        $component->assertStatus(200);
    }
}
