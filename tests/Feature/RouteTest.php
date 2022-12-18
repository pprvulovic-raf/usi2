<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pocetna()
    {
        $response = $this->get('/');
     
        $response->assertStatus(200);
    }
    /*
    public function test_api_zadaci()
    {
        $response = $this->getJson('/api/zadaci');
        $response->assertJsonCount(5);
    }
    public function test_api_dodaj()
    {
        $zadatak = [
            "naziv"=>"Test task",
            "trajanje_sati"=>"1",
            "trajanje_minuta"=>"15",
            "opis"=>"Novi test zadatak",
            "category_id"=>"2"
        ];
        
        $response = $this->postJson('/api/zadatak/dodaj', $zadatak);

        $response->assertStatus(200)->assertJson(['id'=>10]);
    }*/
    public function test_api_dodaj2()
    {
        $ukupnoTaskovaPre = Task::count();

        $zadatak = [
            "naziv"=>"Test task drugi",
            "trajanje_sati"=>"1",
            "trajanje_minuta"=>"15",
            "opis"=>"Novi test zadatak",
            "category_id"=>"2"
        ];
        
        $response = $this->postJson('/api/zadatak/dodaj', $zadatak);

        $ukupnoTaskovaPosle = Task::count();

        $this->assertEquals($ukupnoTaskovaPre+1, $ukupnoTaskovaPosle, "Novi task nije u tabeli");
    }

    
    public function test_api_zavrsi()
    {
        $nezavrseniTask = Task::where('zavrseno',0)->first();

        $id = $nezavrseniTask->id;
        
        $response = $this->getJson('/api/zadatak/zavrsi/'.$id);

        $taskNakon = Task::find($id);

        $this->assertEquals(1, $taskNakon->zavrseno, "Nije zavrsio");
    }
}
