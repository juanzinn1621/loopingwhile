<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping utilizando While</title>
    <style>
        body {
            font-family: 'Courier New';
        }
        h3 {
            color: brown;
            border-bottom: 2px dashed blue;
        }
        
    </style>
</head>
<body style="color: purple; font-size:20px">
    <h3>LOOPING UTILIZANDO WHILES</h3>
    <form name="looping" method="post" action="">
        <label>Informe o limite do looping</label>
        <input type="number" name="limite" min="0" max="10000" required>
        <input type="submit" name="exibir"  value="exibir"><br><br>
    </form>    

    <?php
        if (isset($_POST["exibir"])) {
        $numero=1; //Inicializa a variável
        $limite = $_POST["limite"]; 
        while($numero < $limite) {
            echo "Número: " . $numero . "<br>";
            $numero +=1;
        }
    }

        echo "Fim do looping...";
    ?>
</body>
</html>