<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris</title>

      <style>
            @import url(style.css);
        </style>

</head>
<body>
    <div id="contenedor">
    <img id="grande" src="Chuck_banner.png">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="get">
    <br> 
        <input name="boton" type="submit" value="Next" id="boton">
    </form>
    <br>
    <hr>  <br>
    


    <div id="frase">
<?php 
        if(isset($_GET["boton"])){

                $url = "https://api.chucknorris.io/jokes/random";
                $infoChuck = file_get_contents($url);
                $infoChuck = json_decode($infoChuck, true);

                echo $infoChuck["value"];
        }     
?>

</div>

<br><br>
<hr>
<br><br>
<img id="peque" src="a.gif">
    </div>
</body>
</html>