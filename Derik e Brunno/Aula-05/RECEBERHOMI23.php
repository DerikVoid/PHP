<!DOCTYPE html>
<html>
<body>
    <?php
    //Radio button
    echo"<b> Seu sistema operacional é: </b>" . $_post["sistema"] . "<br><br>";

    //checkbox
    if(isset($_Post["números"]))
    {   
        echo "<b> Os números de sua preferência são:</b><BR>";

    // Faz loop pelo array dos números
    foreach($_Post["números"] as $numero)
    {
        echo "- " . $numero . "<BR><br>";
    }

    }
    else
    {
        echo "<b> Você não escolheu número preferido!</b><br><br>";
    }

    //
    echo "<b> Seu processador é: </b>" . $_Post["processador"] . "<BR>";
    
    ?>
</body>
</html>