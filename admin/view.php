<?php
require "header.php";
require "adminClass.php";
if(isset($_GET['result'])){
    echo $_GET['result'];
}
$obj=new Admin;
$r=$obj->get();
?>
        <div class="main-panel">
            <!-- Navbar -->
            <div class="form_wrapper p-4">
                        <div class="form_container text-dark">
                            <div class="title_container">
                                <h2>Updated Movie Form</h2>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                <form action="genreprocess.php" method="post" enctype="multipart/form-data">
                                <div class="input_field mt-2">
                                    <label>Movie Name</label>
                                    <input type="hidden" name="movie_id"   value="<?php echo $r['id']?>"/>
                                </div>
                                <div>
                                <?php $obj->getGenre($r['genre_id']);?>
                                </div>
                                <div class="input_field mt-2">
                                    <label>Movie Name</label>
                                    <input type="text" name="movie_name" value="<?php echo $r['movie_name'];  ?>" placeholder="Movie name" class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2 col-6">
                                <video width="320" height="240" controls>
                                      <source src="video/<?php echo $r['movie_path']?>" type="video/mp4">
                                     <source src="video/<?php echo $r['movie_path']?>" type="video/ogg">
                                </video>
                                    <input type="file" name="movie_path" value="<?php echo $r['movie_path']?>" placeholder="Movie name" class="form-control mb-3" />
                                </div>
                                
                                <div class="input_field mt-2">
                                <label>Rating</label>
                                    <input type="text" name="rating" value="<?php echo $r['rating']; ?>" class="form-control"placeholder="Rating" class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2">
                                <label>Durations</label>
                                    <input type="number" name="durations" value="<?php echo $r['durations']; ?>"  class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2">
                                <label>Release Year</label>
                                    <input type="month" name="releaseYear" value="<?php echo $r['releaseYear']; ?>"placeholder="Movie name" class="form-control mb-3" />
                                </div>
                                <input type="submit" value="Update Movies" class="btn btn-primary" name="movieupdate" />
                            </form>        
                                </div>
                            </div>
                        </div>
                    </div>
<?php
require "footer.php";
?>