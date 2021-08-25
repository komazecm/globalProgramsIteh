<?php
class Database
{
    public function __construct($konekcija) //koncstruktorska funkcija
    {
        $this->konekcija = $konekcija;
    }

    public function pretraziPrograme($tip)
    {
        $upit = "SELECT * FROM programi p join zemlja z on p.id = z.id WHERE tipPrograma='" . $tip . "'";
        $niz = [];
        $rezultatUpita = $this->konekcija->query($upit);
        while ($red = $rezultatUpita->fetch_object()){
            $niz[] = new Program($red->idProgram,$red->naziv,new Zemlja($red->id,$red->zemlja,$red->glgrad,$red->kontinent),$red->tipPrograma);
        }
        return $niz;
    }

    public function vratiZemlje()
    {
        $upit = "SELECT * FROM zemlja";
        $niz = [];
        $rezultatUpita = $this->konekcija->query($upit);
        while ($red = $rezultatUpita->fetch_object()){
            $niz[] = new Zemlja($red->id,$red->zemlja,$red->glgrad,$red->kontinent);
        }
        return $niz;
    }

    public function obrisi($id)
    {
        $upit = "DELETE FROM programi WHERE idProgram = " . $id; //. je concat 
        return $this->konekcija->query($upit);
    }

    public function sacuvajProgram($naziv, $tipPrograma, $zemlja)
    {
        $upit = "INSERT INTO programi(naziv,tipPrograma,id) VALUES ('".$naziv."','".$tipPrograma."',".$zemlja.")";
        return $this->konekcija->query($upit);
    }

    public function izmeniProgram($programID, $naziv, $tipPrograma, $zemlja)
    {
        $upit = "UPDATE programi SET naziv = '".$naziv."',tipPrograma='".$tipPrograma."',id=".$zemlja." WHERE idProgram=".$programID;
        return $this->konekcija->query($upit);
    }
}

?>