<?php
class Zemlja
{
    private $id;
    private $zemlja;
    private $glgrad;
    private $kontintent;

    public function __construct($id, $zemlja, $glgrad, $kontintent)
    {
        $this->id = $id;
        $this->zemlja = $zemlja;
        $this->glgrad = $glgrad;
        $this->kontintent = $kontintent;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getZemlja()
    {
        return $this->zemlja;
    }
}

?>