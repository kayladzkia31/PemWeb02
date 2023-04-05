<?php
class Persegi
{
    public $sisi;

    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    function hitungLuas()
    {
        return $this->sisi * $this->sisi; 
    }
}
$objek=new persegi(7);
echo $objek->hitungLuas();