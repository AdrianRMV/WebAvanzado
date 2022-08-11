<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<style>
    body{
        padding: 0px;
        margin: 0px;
        background: #f1f1f1;
    }
</style>
    <canvas id="canvas" width="2000" height="2000">
        Tu navegador no admite el elemento &lt;canvas&gt;.
    </canvas>

    <script type="text/javascript">

        let cv = document.getElementById('canvas');
        let ctx = cv.getContext('2d');

        // cuadrado

        ctx.fillStyle = "rgb(200,0,0)"
        ctx.fillRect(10,10,55,50);

        ctx.fillStyle = "rgb(200,0,0)"
        ctx.fillRect(30,30,55,50);

        ctx.fillStyle = "rgba(0,0,200,0.5)"
        ctx.fillRect(30,30,55,50);

        // Lineas
        ctx.moveTo(0,0);
        ctx.lineTo(250,250);
        ctx.stroke();

        ctx.moveTo(150,150);
        ctx.lineTo(300,250);
        ctx.lineTo(250,300);
        ctx.lineTo(150,150);
        ctx.stroke();

        // arc = Circulo
        ctx.beginPath();
        ctx.arc(250,250,100,0,2*Math.PI); // x,y,diametro,angulo inicial, el calculo para el redondeo
        ctx.fill();

        // Circulo 2
        ctx.beginPath();
        ctx.arc(250,550,100,0,2*Math.PI); // x,y,diametro,angulo inicial, el calculo para el redondeo
        ctx.stroke();

        // Texto
        ctx.font = "30px Arial";
        ctx.fillText("Hola mundo", 200,50);
        
        // Texto 2
        ctx.strokeText("Adrian Ramirez", 200, 100);

    </script>
</body>
</html>