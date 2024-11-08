<?php include("./database/db.php");

    if (isset($_POST['save_task'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
       
        // echo 'guardado';

        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";

        $result = mysqli_query($db, $query);

        if(!$result){
            die("Quey fail");
        }

        $_SESSION['message'] = 'Tarea Guardada Satisfactoriamente';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");

    };

    

?>  