<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora tablas de multiplicar</title>
    </head>
    <body>
    <h1>Calculadora Tablas de multiplicar</h1>
        <table border="3">
        <tr>
            

    <?php
    $variable1= $_GET['base'];
    ?>
               
<?php
echo "<h3>"."Tabla del: " .$variable1;
for($i=1; $i<=10; $i++)
echo "<tr>"."<td>".$variable1."x".$i."="."<td>".($variable1*$i);//tr renglon, td celda
?>
            
            
</tr>
</table>
    </body>
</html>