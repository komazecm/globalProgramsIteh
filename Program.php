<?php
class Program
{
    private $idProgram;
    private $naziv;
    private $zemlja;
    private $tipPrograma;

    public function __construct($idProgram, $naziv, $zemlja, $tipPrograma)
    {
        $this->idProgram = $idProgram;
        $this->naziv = $naziv;
        $this->zemlja = $zemlja;
        $this->tipPrograma = $tipPrograma;
    }


    public function getIdProgram()
    {
        return $this->idProgram;
    }

    public function setIdProgram($idProgram)
    {
        $this->idProgram = $idProgram;
        return $this;
    }

    public function getNaziv()
    {
        return $this->naziv;
    }

    public function setNaziv($naziv)
    {
        $this->naziv = $naziv;
        return $this;
    }


    public function getZemlja()
    {
        return $this->zemlja;
    }

    public function setZemlja($zemlja)
    {
        $this->zemlja = $zemlja;
        return $this;
    }


    public function getTipPrograma()
    {
        return $this->tipPrograma;
    }

    public function setTipPrograma($tipPrograma)
    {
        $this->tipPrograma = $tipPrograma;
        return $this;
    }

}
?>