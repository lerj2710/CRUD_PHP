<?php include("./database/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $resultado = mysqli_query($db, $query);
    if (!$resultado) {
        die("Query fallo");
    }
    $_SESSION['message'] = 'Tarea Elimina Sastifactoriamente';
    $_SESSION['message_type'] = 'danger';

    header("location: index.php");
}
