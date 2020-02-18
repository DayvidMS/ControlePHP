<?php
require_once 'Controlador.php';
    class ControleRemoto implements Controlador {
    //Atributos
       private $volume;
       private $ligado;
       private $tocando;

    //Métodos Especiais
    public function __construct(){
        $this->volume = 50;
        $this->ligado = FALSE;
        $this->tocando = false;
    }
    public function getVolume(){
     return $this->volume;
    }
    public function setVolume($volume){
        $this->volume = $volume;
    }
    public function getLigado(){
        return $this->ligado;
    }
    public function setLigado($ligado){
        $this->ligado = $ligado;
    }
    public function getTocando(){
        return $this->tocando;
    }
    public function setTocando($tocando){
        $this->tocando = $tocando;
    }
 //Metodos da interface
    public function ligar() {
        $this->setLigado(True);
        
    }
    public function desligar() {
        $this->setDesligado(false);
    }

    public function abrirMenu() {
       echo "<p>----- MENU -----</p>";
       echo "<br>Está Ligado? :" . ($this->getLigado()?"SIM":"NÃO");
       echo "<br>Está Tocando?:" . ($this->getTocando()?"SIM":"NÃO");
       echo "<br>Volume: " . $this->getVolume() . " ";
       for($i=0; $i <= $this->getVolume(); $i+=10){
           echo "|";
       }
       echo "<br>";
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu";
    }
    
    public function maisVolume(){
        if($this->getligado()){
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "ERRO ! Não posso aumentar o volume";
        }
        
    }

     public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }else {
            echo "ERRO ! Não posso diminuir o volume";
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() === 0){
            $this->setVolume(50);
        }
    }
    
    public function play() {
        if($this->getLigado() && !($this->getTocando)){
            $this->setTocando(true);
        }
    }
    
    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    
    

   


    
}