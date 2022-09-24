<?php
    include '../component/sidebar.php';
    
    $id = $_GET['id']; 

    $query = mysqli_query($con,"select * from series where id='$id'"); // select query

    $data = mysqli_fetch_assoc($query);
    $name_series = $data["name"];
    $_SESSION['genreSeries'] =$data["genre"];
    $realease_series = $data["realease"];
    $episode_series = $data["episode"];
    $season_series = $data["season"];
    $synopsis_series = $data["synopsis"];
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);">

    <div class="body d-flex justify-content-between">
        <h4>Edit SERIES MOVIE</h4>
    </div>
    <hr>

    <form action="../process/editSeriesProcess.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Series</label>
            <input class="form-control" id="nameSeries" name="nameSeries" aria-describedby="emailHelp"
                value=<?php echo ''.$name_series.''?>>
        </div>

        <div class="multi_select_box">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <div class="mb-3">
                <?php $query=mysqli_query($con, "SELECT * FROM series WHERE id='$id'") or die(mysqli_error($con)); 
                  while($data = mysqli_fetch_assoc($query)){
                    echo'
                    <tr>
                    <td>
                        <td>'.$data['genre'].'</td>   
                    </td>                
                    </tr>';
                }
                ?>
            </div>
            <select name=" genreSeries[]" id="genreSeries" class="form-control" multiple
                aria-label="multiple select example" multiple value=<?php 
                    $array = array("Action", "Romance", "Horror", "Comedy");
                    session_start();
                    $genreSelect = $_SESSION['genreSeries'];
                    foreach($array as $value=>$element)
                    {
                        if($name == $genreSelect)
                        {
                             echo "<option selected value='".$element."'>".$element."</option>";
                        }
                        else
                        {
                             echo "<option value='".$element."'>".$element."</option>";
                        }
                    }
                
                ?> </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Realease</label>
            <input class="form-control" id="realease" name="realease" aria-describedby="emailHelp"
                value=<?php echo ''.$realease_series.''?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Episode</label>
            <input class="form-control" id="epsiode" name="episode" aria-describedby="emailHelp"
                value=<?php echo ''.$episode_series.''?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <input class="form-control" id="season" name="season" aria-describedby="emailHelp"
                value=<?php echo ''.$season_series.''?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" aria-describedby="emailHelp"
                rows="5"><?php echo ''.$synopsis_series.''?></textarea>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="EditSeries">Edit Series</button>
        </div>
    </form>

</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>