<?php 


class ContaBanco {
    public $numConta ;
    protected $contatipo ;
    private $dono ;
    private $saldo ;
    private $status ;

    function ContaBanco($nc, $ct, $nome, $saldo, $status){
        $this->numConta = $nc;
        $this->contatipo = $ct;
        $this->dono = $nome;
        $this->saldo = $saldo;
        $this->status = $status;
    }

    public function abrirConta (){

    }

    public function fecharConta (){

    }

    public function depositar (float $deposito){
        $this->saldo += $deposito;
        return "deposito Realizado";
    }

    public function sacar (float $retirada){
        $this->saldo -= $retirada;
        return "saque Realizado";
    }

    public function pagarTaxa (float $taxa = 27,){
        $this->saldo -= $taxa;
        return "Pagamento Realizado";
    }

    public function getnumconta(){
        return $this->numConta;
    }

    public function getcontatipo(){
        return $this->contatipo;
    }

    public function getdono(){
        return $this->dono;
    }

    public function getsaldo(){
        return $this->saldo;
    }

    public function getstatus(){
        return $this->status;
    }

}


?>