<!DOCTYPE html>
<html>
<?php
    abstract class conta{
        public $saldo = 0;

        abstract function depositar($valor);
        
        abstract function sacar($valor);

    }

    class contacorente extends conta {

        function depositar($valor) {
            $this->saldo += $valor;
        }

        function sacar($valor) {
            $this->saldo -= $valor;
        }

        function transferir($contaDestino, $valor){
            $this->saldo -= $valor;
        }
    }

    $novaConta1 = new contacorente();

    $novaConta2 = new contacorente();

    $novaConta1->transferir("xxx-xxx", 500);

    $novaConta2->depositar(500);

        echo "Saldo:".$novaConta1->saldo;

        echo "Saldo" .$novaConta2->saldo;

?>

<body>
    
</body>
</html>