<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function register_creates_and_authenticates_a_client()
    {
        $Nombre = $this->faker->Nombre;
        $Apellido_Paterno = $this->faker->Apellido_Paterno;
        $Apellido_Materno = $this->faker->Apellido_Materno;
        $Direccion = $this->faker->Direccion;
        $response = $this->post('register', [
            'Nombre' => $Nombre,
            'Apellido_Paterno' => $Apellido_Paterno,
            'Apellido_Materno' => $Apellido_Materno,
            'Direccion' => $Direccion,
        ]);
        $response->assertRedirect(route('clientes'));
        $this->assertDatabaseHas('clientes',[
            'Nombre' => $Nombre,
            'Apellido_Paterno' => $Apellido_Paterno,
            'Apellido_Materno' => $Apellido_Materno,
            'Direccion' => $Direccion,
        ]);
        }
    

    public function Edit_client()
    {
        $Nombre = $this->faker->Nombre;
        $Apellido_Paterno = $this->faker->Apellido_Paterno;
        $Apellido_Materno = $this->faker->Apellido_Materno;
        $Direccion = $this->faker->Direccion;
        $response = $this->post('edit', [
            'Nombre' => $Nombre,
            'Apellido_Paterno' => $Apellido_Paterno,
            'Apellido_Materno' => $Apellido_Materno,
            'Direccion' => $Direccion,
        ]);
        $response->assertRedirect(route('clientes'));
        $this->assertDatabaseHas('clientes',[
            'Nombre' => $Nombre,
            'Apellido_Paterno' => $Apellido_Paterno,
            'Apellido_Materno' => $Apellido_Materno,
            'Direccion' => $Direccion,
        ]);
    }
        
        public function destroy_client()
        {
            $response = $this->post('delete/product', [] );
    
            $response->assertStatus(404);
        }
}
