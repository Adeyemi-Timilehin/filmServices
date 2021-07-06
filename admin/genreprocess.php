<?php
require "adminClass.php";
$obj=new Admin;
if(!empty($_POST['genre'])){
    $genrename=htmlspecialchars(strip_tags($_POST['mygenre']));
    $dec=htmlspecialchars(strip_tags($_POST['description']));
    $output=$obj->insertGenre($genrename,$dec);
    if($output){
        header("Location: movie.php");
    }
    else{
        header("Location:movie.php");
    }
}
if(!empty($_POST['movie'])){
    $genreid=$_POST['genres'];
                    $moviename=htmlspecialchars(strip_tags($_POST['movie_name']));
    $movie_path=$_FILES['movie_path'];

    $rating=htmlspecialchars(strip_tags($_POST['rating']));
    $durations=htmlspecialchars(strip_tags($_POST['durations']));
    $releaseYear=htmlspecialchars(strip_tags($_POST['releaseYear']));
    $starring=htmlspecialchars(strip_tags($_POST['starring']));
    $descriptions=htmlspecialchars(strip_tags($_POST['descriptions']));
    $cast=htmlspecialchars(strip_tags($_POST['cast']));
    $output=$obj->insertfilm($genreid,$moviename,$descriptions,$rating,$durations,$releaseYear,$starring,$movie_path,$cast);
   
    if($output){
        header("Location: dashboard.php");
    }
    else{
        header("Location:movie.php");
    }

}
if(!empty($_POST['movieupdate'])){
    $movie_id=$_REQUEST['movie_id'];
    // echo $movie_id;
    $genreid=$_POST['genres'];
    $moviename=htmlspecialchars(strip_tags($_POST['movie_name']));
$movie_path=$_FILES['movie_path'];

$rating=htmlspecialchars(strip_tags($_POST['rating']));
$durations=htmlspecialchars(strip_tags($_POST['durations']));
$releaseYear=htmlspecialchars(strip_tags($_POST['releaseYear']));
$output=$obj->updateMovies($movie_id,$genreid,$moviename,$rating,$durations,$releaseYear,$movie_path);
   
if($output){
    header("Location: dashboard.php");
}
else{
    header("Location:movie.php");
}
}
?>  