<?php 

namespace app;

class ContaBanco {
    public $numConta ;
    protected $contatipo ;
    private $dono ;
    private $saldo ;
    private $status ;

    function __construct($nc, $ct, $nome){
        $this->numConta = $nc;
        $this->contatipo = $ct;
        $this->dono = $nome;
        $this->saldo = 0;
        $this->status = false;
    }

    public function abrirConta (string $ct){
        $this->contatipo = $ct;
        $this->status = true;
        if ($ct == "contaCorrente") {
            $this->saldo = 50;
    }   elseif ($ct == "contaPoupança") {
        $this->saldo = 150;
    }

    }

    public function fecharConta (){
        if($this->saldo > 0){
            echo "Remova o saldo da conta";
        }elseif ($this->saldo < 0) {
            echo "Quite o debito antes de fechar a conta";
        }else{
            $this->status = false;
            echo "conta encerrada";
        }
    }

    public function depositar (float $deposito){
        if ($this->status = true) {
        $this->saldo += $deposito;
        echo "deposito Realizado";
        }
    }

    public function sacar (float $retirada){
        if ($this->status = true) {
        $this->saldo -= $retirada;
        echo "saque Realizado";
        }
    }

    public function pagarTaxa (float $taxa = 27,){
        if ($this->status = true) {
            if ($this->saldo > $taxa) {
                $this->saldo -= $taxa;
                echo "Pagamento Realizado";

            }else{
                echo "saldo insuficiente";
            }

        }

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