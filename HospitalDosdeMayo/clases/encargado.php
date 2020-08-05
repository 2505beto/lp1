<?php

include_once "basedatos.php";
class Encargado extends basedatos

{
        private $dnien ;
        private $nomen ;
        private $apellen; 
        private $celuen ;
        private $fechanac ;
        private $sexen ;
        private $estadocien ;
        private $direccionen ;
        private $correoen ;
        private $cargoen ; 


    public function getdnien()
    {
        return $this->dnien;
    }

    public function setdnien($dniusu): void
    {
        $this->dnien = $dnien;
    }

    
    public function getnomen()
    {
        return $this->nomen;
    }

    public function setnomen($nomen): void
    {
        $this->nomusu = $nomen;
    }

    public function getapellen()
    {
        return $this->apellen;
    }

    public function setapellusu($apellen): void
    {
        $this->apellusu = $apellen;
    }

    public function getceluen()
    {
        return $this->celuen;
    }

    public function setceluen($celuen): void
    {
        $this->celuusu = $celuen;
    }

    public function getfechanac ()
    {
        return $this->fechanac ;
    }

    public function setfechanac ($fechanac): void
    {
        $this->fechanac  = $fechanac ;
    }

    public function getsexen()
    {
        return $this->sexen ;
    }

    public function setsexen ($sexen): void
    {
        $this->sexen  = $sexen;
    }

    public function getestadocien ()
    {
        return $this->estadocien;
    }

    public function setestadocien($estadocien): void
    {
        $this->estadocien = $estadocien;
    }

    public function getdireccionen ()
    {
        return $this->direccionen;
    }

    public function setdireccionen($direccionen): void
    {
        $this->direccionen = $direccionen;
    }

    public function getcorreoen ()
    {
        return $this->correoen;
    }

    public function setcorreoen($correoen): void
    {
        $this->correousu = $correousu;
    }

    public function getcargoen ()
    {
        return $this->cargoen ;
    }

    public function setcargoen ($cargoen): void
    {
        $this->cargoen  = $cargoen;
    }

    public function insertar(){
        $myConn = $this->conexion();
        $sql = "INSERT INTO encargado(dnien, nomen, apellen, celuen, fechanac ,sexen, estadocien, direccionen, correoen, cargoen)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $myConn->prepare($sql);
        $stmt->bind_param('ssssssssss', $this->dniusu, $this->nomen, $this->apellen, $this->celuen, $this->fechanac, $this->sexen, $this->estadocien, $this->direccioen, $this->correoen, $this->cargoen);

        $resultados = $stmt->execute();
        $stmt->close();
        $this->cerrar();

        return $resultados;
    }
}