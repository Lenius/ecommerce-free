<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Product::class);

        $component->assertStatus(200);
    }
}
