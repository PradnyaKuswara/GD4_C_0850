<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>ADD MOVIE</h4>
    </div>
    <hr>
    <form action="../process/addMoviesProcess.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Movie</label>
            <input class="form-control" id="nameMovie" name="nameMovie" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select class="form-select" id="genreMovie" name="genreMovie" aria-describedby="Default select example">
                <option value="Action">Action</option>
                <option value="Romance">Romance</option>
                <option value="Horror">Horror</option>
                <option value="Comedy">Comedy</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Realese Year</label>
            <input class="form-control" id="realese" name="realese" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <input class="form-control" id="season" name="season" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp"
                rows="5"></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="addMovie">Add Movie</button>
        </div>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>