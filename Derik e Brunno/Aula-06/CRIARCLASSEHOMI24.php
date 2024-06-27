<!DOCTYPE html>
<html>
<body>
    <?php
    class Conta{
        public $saldo = 0;

        function depositar($valor) {
            $this->saldo += $valor;
        }

        function sacar($valor) {
            $this->saldo -= $valor;
  
        }
    }

    class ContaCorrente extends conta {
        function transferir($contaDestino, $valor){
            $this->saldo -= $valor;

        }
        
    }

    $novaConta1 = new ContaCorrente();

    $novaConta2 = new ContaCorrente();

    $novaConta1->transferir("xxx-xxx", 500);

    $novaConta1->depositar(500);

        echo "Saldo:".$novaConta1->saldo;

        echo "Saldo:".$novaConta2->saldo;
    
?>
    
</body>
</html>