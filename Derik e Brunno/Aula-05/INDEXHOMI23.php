<!DOCTYPE html>
<html>
<body>
    <form id="formCadastro" name="formCadastro" method="POST" action="RECEBERHOMI23.php">
        <!-- Radio Button --> 
         <B>Qual seu sistema operacional?</B><br>
         <input type="radio" name=sistema value="Windows 8.1"> Win 98 <br>
         <input type="radio" name=sistema value="Windows 10"> Win XP <br>
         <input type="radio" name=sistema value="Linux"> Linux <br>
         <input type="radio" name=sistema value="Mac"> Mac <br>

         <!--  Checkbox -->
           <B>Escolha os numeros de sua preferência:</B><br>
           <input type=checkbox name="numero[]" value=10> 10 <br>
           <input type=checkbox name="numero[]" value=100> 100 <br>
           <input type=checkbox name="numero[]" value=1000> 1000 <br><br>

        <!-- Dropdown list -->
         <B>Qual seu processador?</B><br>
         <select name=processador>
            <option value=Pentíum>Pentíum</option>
            <option value=AMD>AMD</option>
            <option value=Celeron>Celeron</option>
            </select><BR><BR>

            <input id="botaoEnviar" type="submit" value="Enviar">
    </form>
</body>
</html>