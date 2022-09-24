<?php
if (isset($_POST['EditSeries'])) {

    include('../db.php');
    $id = $_GET['id'];
  
    $name = $_POST['nameSeries'];
    $genre = implode(", ", $_POST["genreSeries"]);
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
  
    $query = mysqli_query($con,"UPDATE series SET name = '$name', genre = '$genre', realease = '$realease', episode = '$episode', season = '$season', synopsis = '$synopsis' WHERE id='$id'"
    )or die(mysqli_error($con)); 

    if ($query) {
        echo
        '<script>
            alert("Edit Series Success"); window.location = "../page/listMoviesSeriesPage.php"
            </script>';
    } else {
        echo
        '<script>
            alert("Edit Series Failed");
            </script>';
    }
} else {
    echo
    '<script>
 window.history.back()
 </script>';
}