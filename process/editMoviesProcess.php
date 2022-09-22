<?php
    session_start();
    if(isset($_POST['editMovie'])) {
        include ('../db.php');
        $id = $_GET['id'];
        $name_movie = $_POST['nameMovie'];
        $genre = $_POST['genreMovie'];
        $year = $_POST['realese'];
        $season_movie = $_POST['season'];
        $synopsis_movie = $_POST['synopsis'];

        $query = mysqli_query($con, "UPDATE movies SET name = '$name_movie', genre='$genre', realese='$year', season='$season_movie', synopsis='$synopsis_movie' WHERE id = '$id'") or die(mysqli_error($con));

        if($query) {
            echo
            '<script>
                alert("Edit Movies Success"); 
                window.location = "../page/listMoviesPage.php"
            </script>';
        }else {
            echo
            '<script>
                alert("Edit Movies Failed Failed");
            </script>';
        }
    }else {
        echo
        '<script>
            window.history.back()
        </script>'; 
    }
?>