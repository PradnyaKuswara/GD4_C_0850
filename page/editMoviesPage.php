<?php
    include '../component/sidebar.php';

    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM movies where id= '$id'") or die(mysqli_error($con));

    $search = mysqli_fetch_assoc($query);
    $name_movie = $search['name'];
    $_SESSION['genreMovies'] = $search['genre'];
    $year = $search['realese'];
    $season_movie = $search['season'];
    $synopsis_movie = $search['synopsis'];

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>ADD MOVIE</h4>
    </div>
    <hr>
    <form action="../process/editMoviesProcess.php?id=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Movie</label>
            <input class="form-control" id="nameMovie" name="nameMovie" aria-describedby="emailHelp"
                value=<?php echo ''.$name_movie.''; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select class="form-select" id="genreMovie" name="genreMovie" aria-describedby="Default select example">
                <?php
                    $array = array("Action", "Romance", "Horror", "Comedy");
                    session_start();
                    $genreSelect = $_SESSION['genreMovies'];
                    foreach($array as $value=>$element)
                    {
                        if($element == $genreSelect)
                        {
                             echo "<option selected value='".$element."'>".$element."</option>";
                        }
                        else
                        {
                             echo "<option value='".$element."'>".$element."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Realese Year</label>
            <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp"
                value=<?php echo ''.$year.''; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <input class="form-control" id="season" name="season" aria-describedby="emailHelp"
                value=<?php echo ''.$season_movie.''; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp"
                rows="5"><?php echo ''.$synopsis_movie.''; ?></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editMovie">Edit Movie</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>