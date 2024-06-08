<!DOCTYPE html>
<html>
    <body>
        <?php
        //Array com Chave => Valor
        $listaAlunoIdade = array(
            "Leonardo" => 31,
            "Gabriella" =>27,
            "Bianca" => 07
        );
        //Array apenas com Valor
        $listaCores = array(
            "Vermelho",
            "Amarelo",
            "Verde",
            "Laranja",
        );
        //Acesso ao item do array $listaAlunoIdade[CHAVE]
            echo $listaAlunoIdade["Leonardo"];

            echo "br />";

            echo $listaCores[2];

            echo"<br />";

        //Exibir em tela todo o conteudo (chave e valor) de um array var_dump(array)
            var_dump($listaAlunoIdade);

            echo "<br />";

            var_dump($listaCores)
        ?>
    </body>
</html>