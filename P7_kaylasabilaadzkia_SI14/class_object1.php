<?php
class Mamalia
{
    public $namahewan;
    public $warnahewan;
    public $habitat;
    public $makanan;

    function menyusui()
    {
        return "$this->namahewan adalah hewan menyusui";
    }

    function beranak()
    {
        return "$this->namahewan adalah hewan yang melahirkan";
    }

    function makan ()
    {
        return "$this->namahewan suka makan $this->makanan";
    }
}
$objek = new mamalia();
$objek->namahewan = "kucing";
$objek->warnahewan = "coklat";
$objek->habitat = "Sekitar Manusia";
$objek->makanan = "Wiskhas";
echo $objek->menyusui();
