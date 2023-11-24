<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class WebRouteTest extends TestCase
{
    use RefreshDatabase; // Puedes omitir esto si no necesitas refrescar la base de datos

    /** @test */
    public function it_returns_auth_login_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200); // Verifica que la solicitud sea exitosa (código 200)
        $response->assertViewIs('auth.login'); // Verifica que la vista devuelta sea 'auth.login'
        $response->assertSeeText('Iniciar Sesión');
       // $response->assertSee('Iniciar'); // Puedes agregar aserciones para verificar contenido específico en la vista
    }
    public function it_returns_index_view_for_authenticated_users()
    {
        // Simula un usuario autenticado
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // Hace una solicitud GET a la ruta 'cargos.index'
        $response = $this->get(route('cargos.index'));

        // Verifica que la solicitud fue exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verifica que la vista 'cargos.index' se devuelva
        $response->assertViewIs('cargos.index');
    }
    public function it_displays_slogan_section()
    {
        // Hacer una solicitud a la página que contiene el HTML
        $response = $this->get('/');  // Reemplaza '/' con la ruta de tu página si es diferente

        // Verificar que la solicitud sea exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar la existencia de la sección del SLOGAN en el HTML
        $response->assertSee('<div class="col-lg-6 d-flex align-items-center gradient-custom-2">');
        $response->assertSee('<div class="text-white px-3 py-4 p-md-5 mx-md-4">');
        $response->assertSee('<h4 class="mb-4">SLOGAN</h4>');
        $response->assertSee('<p class="small mb-0">Su mejor oportunidad y exige un control total del inventario debido a que todos quieren vivir de manera saludable. También tiene conocimientos adecuados sobre Medicina y su licencia que no es fácil de obtener.</p>');
    }
    public function eslogan()
    {
        // Hacer una solicitud a la página que contiene el HTML
        $response = $this->get('/');  // Reemplaza '/' con la ruta de tu página si es diferente

        // Verificar que la solicitud sea exitosa (código de estado 200)
        $response->assertStatus(200);

        // Verificar la existencia de la sección del SLOGAN en el HTML
        $response->assertSeeText('Su mejor oportunidad y exige un control total del inventario debido a que todos quieren vivir de manera saludable. También tiene conocimientos adecuados sobre Medicina y su licencia que no es fácil de obtener.');
    }

}
?>