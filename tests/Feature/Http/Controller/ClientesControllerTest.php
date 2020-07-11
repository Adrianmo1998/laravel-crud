<?php

namespace Tests\Feature\Http\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ClientesControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
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

    public function test_register_creates_and_authenticates_a_client()
    {
        $name = $this->faker->name;
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $address = $this->faker->address;
        $response = $this->post('clientes', [
            'Nombre' => $name,
            'Apellido_Paterno' => $firstName,
            'Apellido_Materno' => $lastName,
            'Direccion' => $address
        ]);
        $this->assertDatabaseHas('clientes',[
            'Nombre' => $name,
            'Apellido_Paterno' => $firstName,
            'Apellido_Materno' => $lastName,
            'Direccion' => $address
        ]);
        }

        public function test_get_client()
        {
            $name = $this->faker->name;
            $firstName = $this->faker->firstName;
            $lastName = $this->faker->lastName;
            $address = $this->faker->address;
            $response = $this->put('clientes/.1', [
                'Nombre' => $name,
                'Apellido_Paterno' => $firstName,
                'Apellido_Materno' => $lastName,
                'Direccion' => $address
            ]);
            $this->assertDatabaseHas('clientes',[
                'Nombre' => $name,
                'Apellido_Paterno' => $firstName,
                'Apellido_Materno' => $lastName,
                'Direccion' => $address
            ]);
            }


            public function test_delete_client()
            {
                $name = $this->faker->name;
                $firstName = $this->faker->firstName;
                $lastName = $this->faker->lastName;
                $address = $this->faker->address;
                $response = $this->delete('clientes/.1', [
                    'Nombre' => $name,
                    'Apellido_Paterno' => $firstName,
                    'Apellido_Materno' => $lastName,
                    'Direccion' => $address
                ]);
                $this->assertDatabaseHas('clientes',[
                    'Nombre' => $name,
                    'Apellido_Paterno' => $firstName,
                    'Apellido_Materno' => $lastName,
                    'Direccion' => $address
                ]);
                }
}
