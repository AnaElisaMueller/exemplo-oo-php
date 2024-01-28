<?php

class casaGrande 
{
    private $quartoSuite;
    private $quartoHospedes;
    private $salaJantar;
    private $salaEstar;
    private $cozinha;
    private $banheiroGeral;
    private $banheiroPrivativo;
    private $piscina;
    private $corCasa;

    private $largura;
    private $comprimento;


    function __construct ($largura =10, $comprimento=20){//caso não seja passado nada, ele assume estes valores
            $this->quartoHospedes    = 2;
            $this->quartoSuite       = 1;
            $this->salaJantar        = 1;
            $this->salaEstar         = 1;
            $this->cozinha           = 1;
            $this->banheiroGeral     = 2;
            $this->banheiroPrivativo = 1;
            $this->piscina           = 1;
            $this->corCasa           = 'Branca';

            $this->largura     = $largura;
            $this->comprimento = $comprimento;
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
        $html .= 'Quarto de Hospedes:    '. $this->quartoHospedes . '<br>';
        $html .= 'Quarto Suite:          '. $this->quartoSuite . '<br>';
        $html .= 'Sala de Jantar:        '. $this->salaJantar . '<br>';
        $html .= 'Sala de Estar:         '. $this->salaEstar . '<br>';
        $html .= 'Cozinha:               '. $this->cozinha . '<br>';
        $html .= 'Banheiro Geral:        '. $this->banheiroGeral . '<br>';
        $html .= 'Banheiro Privativo:    '. $this->banheiroPrivativo . '<br>';
        $html .= 'Piscina:               '. $this->piscina . '<br>';
        $html .= 'Cor da Casa:           '. $this->corCasa . '<br>';
        $html .= 'Largura:               '. $this->largura . '<br>';
        $html .= 'Comprimento:           '. $this->comprimento . '<br>';

        return $html;
    }

}