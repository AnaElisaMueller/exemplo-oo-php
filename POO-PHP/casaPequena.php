<?php

class casaPequena 
{
    private $quartos;
    private $sala;
    private $cozinha;
    private $banheiro;
    private $corCasa;

    private $largura;
    private $comprimento;

    function __construct ($largura =10, $comprimento=20){//caso não seja passado nada, ele assume estes valores
            $this->quartos     = 2;
            $this->sala        = 1;
            $this->cozinha     = 1;
            $this->banheiro    = 1;
            $this->corCasa     = 'Azul';

            //não aceitar tamanhos maiores
            if($largura>10){
                $this->largura = 10;
            }   else{$this->largura = $largura;
                }
            if($comprimento>20){
                $this->comprimento = 20;
            }   else{           
                $this->comprimento = $comprimento;}
    }

    public function setCorCasa($cor){
        if(!empty($cor)){
            $this->corCasa = $cor;
        }
        
    }

    public function getCorCasa($cor){
        return $this->corCasa;
    }
    public function showCasa(){ //.= 

        $html = '<h1>Dados da Minha Casa Grande</h1><br>';
        $html .= 'Quartos:               '. $this->quartos . '<br>';
        $html .= 'Sala:                  '. $this->sala . '<br>';
        $html .= 'Cozinha:               '. $this->cozinha . '<br>';
        $html .= 'Banheiro:              '. $this->banheiro . '<br>';
        $html .= 'Cor da Casa:           '. $this->corCasa . '<br>';
        $html .= 'Largura:               '. $this->largura . '<br>';
        $html .= 'Comprimento:           '. $this->comprimento . '<br>';

        return $html;
    }

}