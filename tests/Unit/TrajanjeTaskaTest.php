<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Task;

class TrajanjeTaskaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_pretvoriUMinute_00_00(){
        $h = "00";
        $m = "00";
        $ocekivano = 0;

        $model = new Task();
        $izracunato = $model->pretvoriUMinute($h, $m);
        $this->assertEquals($ocekivano, $izracunato, "$h:$m ne vraca $ocekivano minuta");
    }
    public function pretvoriUMinute_00_45(){
        $h = "00";
        $m = "45";
        $ocekivano = 45;

        $model = new Task();
        $izracunato = $model->pretvoriUMinute($h, $m);
        $this->assertEquals($ocekivano, $izracunato, "$h:$m ne vraca $ocekivano minuta");
    }
    public function pretvoriUMinute_01_05(){
        $h = "01";
        $m = "05";
        $ocekivano = 65;

        $model = new Task();
        $izracunato = $model->pretvoriUMinute($h, $m);
        $this->assertEquals($ocekivano, $izracunato, "$h:$m ne vraca $ocekivano minuta");
    }

    public function test_formatirajTrajanje_45(){
        $minuta = 45;
        $ocekivano = "00:45";

        $model = new Task();
        $model->trajanje = $minuta;
        $izracunato = $model->formatirajTrajanje();
        $this->assertEquals($ocekivano, $izracunato, "$minuta nije formatirano kako treba. Ocekivano je $ocekivano a dobijeno je $izracunato");
    }   
}
