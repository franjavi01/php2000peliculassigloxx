<?php include 'fragmentos/header.php' ?>
<?php include 'fragmentos/noche.php' ?>

<div class="container">
    <div class="col-11">
<p>Aquí tienes las mejores películas clásicas del siglo XX, para ver online y para la descarga. Si eres amante del cine clásico este es tu sitio</p>

<p>El cine fue inventado por los hermanos Lumiere a finales del siglo XIX. El 28 de diciembre de 1895 proyectan su primera película en la que simplemente se ve a unos obreros saliendo de una fábrica. Los hermanos Lumìere hacen más de 500 películas sin un guión elaborado y sin la participación de actores profesionales, o sea, lo mismo que nosotros podemos hacer actualmente con nuestro móvil. Su intención, más que hacer una gran superprodución, era la de dar a conocer el invento a todo el mundo.</p>

<p>Sin embargo en el siglo IV a.c. los chinos inventan una especie de linterna en la que en su interior llevaba una turbina que se accionaba con el viento o con un mecanismo dentado que giraba una persona. Así daba vueltas una pantalla en la que se encontraban dibujadas una serie de ilustraciones, animales plantas, estrellas, etc, que a su vez, una vela situada en el interior, con su luz traspasaba las ilustraciones que se proyectaba sobre paredes. Todo esto fue un anticipo del invento de los hermanos Lumìere.</p>

<p>A lo largo del siglo XX el invento se fue perfeccionando con el sonido y el color. Ahora el cine es considerado un arte más como la pintura, la escultura o la literatura. Más precisamente es el séptimo arte.

<p>Disfruta de esta web de cine clásico y recuerda nuestro lema: <span style="font-weight: bold">“Si eres amante del cine clásico este es tu sitio”</span></p>

<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "php2000peliculassigloxx");
        if (!$conexion) {
            echo "error al conectar con la base de datos";
        }
         $sql = "SELECT * FROM cardsindex";
         $resultSet = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($resultSet)){
            ?>
        <a href="<?php echo $row[1] ?>" target="_blank" rel="noopener noreferrer">
        <div class="col">
            <div class="card"><img class="card-img-top" src="<?php echo $row[2] ?>" alt="<?php echo $row[3] ?>">
                <div class="card-body">
                
                    <center><h2 class="card-text"><strong><?php echo $row[4] ?></strong></h2></center>
                    <p class="card-text"><?php echo $row[5] ?></p>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</div>
</div>
</div>
<?php include 'fragmentos/footer.php' ?>