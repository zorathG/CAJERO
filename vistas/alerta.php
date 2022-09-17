
<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<div class="hidden"><div id="number"></div></div>
    <script type="text/javascript">
        n = 250
        var l = document.getElementById("number");
        var id = window.setInterval(function(){
            document.onmousemove = function(){
                n = 250
            };

            l.innerText = n;
            n--;

            if(n <= -1){
                alert("La sesion Expiro");
                location.href="../procesos/salir.php";
            }
        },1200);
    </script>
</body>
</html>