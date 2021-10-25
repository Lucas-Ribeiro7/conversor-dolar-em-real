<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Conversão</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="corpo">
            <h1>Conversão de Dolar a Real</h1>
            <br>
            <div class="form">
                <form method="POST" action="">
                    <label>Digite o valor em Dolar: </label>
                    <input type="number" name="dolar" min="0" step="any" required>
                    <input type="submit" value="Converter">
                </form> 
                <?php
                    if(isset($_POST["dolar"])){
                        $dolar = ($_POST["dolar"]);
                        $real = $dolar * 5.56;
                        echo "<p><b>O Valor em Real: ".number_format($real, 2, ",", ".")." reais</b></p>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>