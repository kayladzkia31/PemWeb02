<?php
class Bola {
    public $jariJari;

    function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    function hitungVolume()
    {
        return $this->jariJari * $this->jariJari *
        $this->jariJari * 3.14 * 4 / 3;
    }
}
$objek = new bola(10);
echo $objek->hitungVolume();