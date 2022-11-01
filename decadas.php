<?php include 'fragmentos/header.php' ?>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "php2000peliculassigloxx");
        if (!$conexion) {
            echo "error al conectar con la base de datos";
        }
         $sql = "SELECT * FROM decadas";
         $resultSet = mysqli_query($conexion,$sql);
        while($row=mysqli_fetch_row($resultSet)){
            ?>
        <a href="<?php echo $row[1] ?>" target="_blank" rel="noopener noreferrer">
        <div class="col">
            <div class="card"><img class="card-img-top" src="<?php echo $row[2] ?>" alt="<?php echo $row[3] ?>">
                <div class="card-body">
                    <center><h3 class="card-text"><strong><?php echo $row[4] ?></strong></h3></center>
                </div>
            </div>
        </div>
<?php } ?>
    </div>
</div>
<?php include 'fragmentos/footer.php' ?>