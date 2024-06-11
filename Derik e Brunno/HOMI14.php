<!DOCTYPE html>
<html>
<body>
    <?php
    $nome = "Fulano";

    switch ($nome) {
        case "Fulano":
            echo "Eae Fulano!";
            break;

            case "Sicrano":
                echo "Eae Sicrano!";
                break;

                case "Beltrano":
                    echo "Eae Beltrano";
                    break;

                    default:
                    echo "Qual é o seu nome?";
                    break;
    }

    // Resultado é: Eae Fulano!
    ?>
</body>
</html>