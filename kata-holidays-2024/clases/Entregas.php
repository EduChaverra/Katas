<?php

enum Sprint: string {
    case HTML_Y_PHP='html y php';
    case BASES_DE_DATOSS='base de datos';
    case PATRONES='patrones';
    case LARAVEL_MVC='laravel mvc';
    case LARAVEL_API='laravel api';
}

class Entregas{
    protected $nombreEntrega;
    protected $sprint;
    protected $fechaEntrega;
    protected $linkGithub;
    protected $comentarios;

    public function __construct(string $nombreEntrega, SPRINT $sprint = null, string $fechaEntrega, string $linkGithub, string $comentarios)
    {  
        $this->nombreEntrega= $nombreEntrega;
        $this->sprint = $sprint;
        $this->fechaEntrega = $fechaEntrega;
        $this->linkGithub = $linkGithub;
        $this->comentarios = $comentarios;
    }

    public function getNombreEntrega(){
        return $this->nombreEntrega;
    }
    public function getSprint(){
        return $this->sprint;
    }
    public function getFechaEntrega(){
        return $this->fechaEntrega;
    }
    public function getLinkGithub(){
        return $this->linkGithub;
    }
    public function getComentarios(){
        return $this->comentarios;
    }
    public function entregar() {
        echo $this->nombreEntrega . " entregada.<br>";
    }
    public function reentregar() {
        echo $this->nombreEntrega . " reentregada.<br>";
    }

}

?>