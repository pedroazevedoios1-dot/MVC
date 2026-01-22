<?php

Class Bebida
{
    //Atributos
    private $nome;
    private $preco;    
    public $ingredientes;

    //Construtor da classe
    //Toda classe tem um método/função CONSTRUCT que tem o objetivo de inicializar os atributos do objeto com os seus repectivos valores
    public function __construct($nome,$preco,$ingredientes)
    {
        $this->nome =$nome;
        $this->preco =$preco;
        $this->ingredientes =$ingredientes;

    }

    //Métodos
    public function vender()
    {
        $retorno = "Vendide! Para-béns vc vendeu a sua alma a Satanas!";
        return $retorno;
    }

}

?>