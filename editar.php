<?php

    include ("./database/db.php");


    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        if (mysqli_num_rows($resultado) == 1 ) {
            $row = mysqli_fetch_array($resultado);
            $title = $row['title'];
            $description = $row['description'];

            // echo 'Puedes editarlo';
        }


    }

    if (isset($_POST['update'])) {
            $id = $_GET['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];

            $query = "UPDATE task set title= '$title', description = '$description' WHERE id = $id";
            mysqli_query($db, $query);

            $_SESSION['message'] = 'Tarea Actualizada Sastifactoriamente';
            $_SESSION['message_type'] = 'warning';
             header("location: index.php");
            
    }


?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
          <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" 
                        class="form-control" placeholder="Actualizar El titulo">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2"  class="form-control" placeholder="Actualializar
                         Descripcion"><?php echo $description ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">Actualizar</button>
                </form>
            </div>
          </div>
    </div>

</div>



<?php include("includes/footer.php")?>

