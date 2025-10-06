<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonaTest extends TestCase
{
     public function test_CrearPersona(): void
    {
        $data = [
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'telefono' => '123456789'
        ];

        $response = $this->post('/api/personas', $data);
        $response->assertStatus(201);
        $response->assertJsonFragment($data);
        $this->assertDatabaseHas('personas', $data);
   }
}