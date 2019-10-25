<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $vector=array('1'=>array(90,71,92,73,84,95), '2'=>array(76,97,78,89,80,81), '3'=>array(72,93,84,85,86,87),
        '4'=>array(95,54,83,72,91,70), '5'=>array(80,91,82,93,84,95), '6'=>array(87,86,85,84,83,82,),
        '7'=>array(90,90,90,90,90,90), '8'=>array(85,95,75,90,70,74), '9'=>array(80,80,80,80,80,80),
        '10'=>array(100,100,100,100,100,100));
        $p=promedio($vector);
        echo "<h1>Promedio General</h1>";
        echo "Prodemio general del grupo ".$p;
        echo "<h1>Promedio Alumnos</h1>";
        promedioA($vector);
        echo "<h1>Promedio De Materias</h1>";
        for($i=0; $i < 6; $i++) { 
            promedioM($vector,$i);
        }
        $c=promedioAr($vector,$p);
        echo "<h1>Alumnos con promedio mayor al grupal</h1>";
        echo'<br>'."Alumnos con promedio mayor al grupal: ".$c;
    ?>
</body>
</html>

<?php
    function promedio($vector){
        $promedio=0;
        $prom=0;
        foreach ($vector as $key => $value) {
            for ($i=0; $i <6; $i++) { 
                $prom+=$vector[$key][$i];
            }
            $promedio+=$prom/6;
            $prom=0;
        }
        $promedio=$promedio/10;
        return $promedio;
    }

    function promedioA($vector){
        $promedio=0;
        $prom=0;
        foreach ($vector as $key => $value) {
            echo'<br>'."Alumno ".$key.': ';
            for ($i=0; $i <6; $i++) { 
                $prom+=$vector[$key][$i];
                echo $vector[$key][$i].', ';
            }
            $promedio+=$prom/6;
            echo" promedio: ".$promedio;
            $prom=0;
            $promedio=0;
        }
    }
    function promedioM($vector, $m){
        $promedio=0;
        $prom=0;
        foreach ($vector as $key => $value) {
            for ($i=$m; $i <($m+1); $i++) { 
                $prom+=$vector[$key][$i];
            }
        }
        $promedio=$prom/10;
        echo'<br>'.$promedio." Materia: ".$m;
        $prom=0;
        $promedio=0;
    }
    function promedioAr($vector, $p){
        $promedio=0;
        $prom=0;
        $cont=0;
        foreach ($vector as $key => $value) {
            for ($i=0; $i <6; $i++) { 
                $prom+=$vector[$key][$i];
            }
            $promedio=$prom/6;
            if ($promedio>=$p) {
                $cont+=1;
            }
            $prom=0;
            $promedio=0;
        }
        return $cont;
    }
?>