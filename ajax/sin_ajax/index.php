<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <section>
            <h1>Clientes</h1>
            <div id="menu_clientes">
                <a href="index.php?cod=1" class="enlace">Pedro</a>
                <a href="index.php?cod=2" class="enlace">José</a>
                <a href="index.php?cod=3" class="enlace">Ignacio</a>
                <a href="index.php?cod=4" class="enlace">Matias</a>
                <a href="index.php?cod=5" class="enlace">Julian</a>
            </div>
        </section>

        <section id="informacion">
            <?php 
                if(!isset($_REQUEST['cod'])){
                   echo "¡Selecciona un cliente!";
                } else {
                    
                    $codigo = (int) $_REQUEST['cod'];

                    $resultado = match ($codigo) {
                        1 => "Pedro",
                        2 => "José",
                        3 => "Ignacio",
                        4 => "Matias",
                        5 => "Julian",
                        default => "No existe el cliente"
                    };

                    echo $resultado . " es el mejor cliente";
                }

            ?>
        </section>

    </main>
</body>
</html>