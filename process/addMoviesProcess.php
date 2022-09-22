<?php
    session_start();
    if (isset($_POST['addMovie'])) {
        include('../db.php');
        
        $name_movie = $_POST['nameMovie'];
        $genre = $_POST['genreMovie'];
        $year = $_POST['realese'];
        $season_movie = $_POST['season'];
        $synopsis_movie = $_POST['synopsis'];

        $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis)
            VALUES('$name_movie', '$genre', '$year', '$season_movie', '$synopsis_movie')") or die(mysqli_error($con));

        if ($query) {
            echo
            '<script>
                alert("Add Movies Success"); 
                window.location = "../page/listMoviesPage.php"
            </script>';
        } else {
            echo
            '<script>
                alert("Add Movies Failed Failed");
            </script>';
        }
    } else {
        echo
        '<script>
            window.history.back()
        </script>';
    }
?>