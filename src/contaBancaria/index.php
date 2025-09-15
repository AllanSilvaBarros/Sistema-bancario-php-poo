<?php 


class ContaBanco {
    public $numConta ;
    protected $contatipo ;
    private $dono ;
    private $Saldo ;
    private $Status ;

    function ContaBanco($nc, $ct, $nome, $Saldo, $Status){
        $this->numConta = $nc;
        $this->contatipo = $ct;
        $this->dono = $nome;
        $this->Saldo = $Saldo;
        $this->Status = $Status;
    }

    public function abrirConta (){

    }

    public function fecharConta (){

    }

    public function depositar (){

    }

    public function sacar (){

    }

    public function pagarTaxa (){

    }

    public function getnumconta(){
        return $this->$numConta;
    }

}


?>