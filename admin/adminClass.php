<?php
class Admin{

    public $con;
    public function __construct(){  
    $this->con=new mysqli('localhost','root','','moviedb');

    }
    public function insertGenre($genre_name,$description){
       
        $sql="INSERT INTO genres(genre_name,genre_desc) VALUES('$genre_name','$description')";
        
        $output=$this->con->query($sql);
        if($output){
            return $output;
        //    return $this->con->insert_id;
        }
        return false;
        }
        function getGenre($selected = '')
        {
            $q = "SELECT * FROM genres";
            $result = $this->con->query($q);


                echo "<select name='genres' id='type' class='form-control'>";
                echo "<option value=''> Select Genre Type </option>";
                while ($row = $result->fetch_assoc()) {

                    $genreName = $row['genre_name'];
                    $genreId = $row['id'];

                    if ($selected == $genreId) {

                        echo "<option value='$genreId' selected> $genreName</option>";
                    } else {
                        echo "<option value='$genreId' > $genreName</option>";
                    }

                }
                echo "</select>";
            }



            //fetching all customers details based on their Id
            public function getDetails($id) {
                $sql = "SELECT * FROM customers WHERE id = '$id'";
                
                $result = $this->con->query ($sql);
               
                $row = $result->fetch_assoc();
                
                return $row;
            }
        
            
function insertfilm($genreid,$moviename,$descriptions,$rating,$durations,$releaseYear,$starring,$movie_path,$cast){
	
    $Mname =  $movie_path['name'];
    $tmp_loc = $movie_path['tmp_name'];
    // $filetype = strtolower ($movie_path['type']);
    
    
    //retrieve the extension
    $ext = pathinfo ($Mname, PATHINFO_EXTENSION);
    
    //New file name
    //$newname = rand(100000000,900000000).".$ext";
    $newname = time().".$ext";
    
    //check allowed extension
    
        move_uploaded_file ($tmp_loc, "video/$newname");
       
        $sql="INSERT INTO movie_services(genre_id,movie_name,descriptions,rating,durations,releaseYear,starring,movie_path,cast)VALUES('$genreid','$moviename','$descriptions','$rating','$durations','$releaseYear','$starring','$newname','$cast')";
        $result = $this->con->query ($sql);
        if($result){
            return true;
        }
        return false;
}
//Read data from the database
function getMovies(){
    $sql="SELECT * FROM movie_services";
    $output = $this->con->query ($sql);
    $row=array();
    while($result = $output->fetch_assoc()){
        $row[]=$result;
    }
    if($row){
        return $row;
    }
    return false;
    }
    //fetcing per data from database 
   
    
        function get(){
            $sql="SELECT * FROM movie_services ";
            $output = $this->con->query ($sql);
            $result = $output->fetch_assoc();
          
            if($result){
                return $result;
            }
            return false;
            }
//update the database
function  updateMovies($Id,$genreid,$moviename,$rating,$durations,$releaseYear,$movie_path){
			

    $Mname =  $movie_path['name'];
    $tmp_loc = $movie_path['tmp_name'];
    // $filetype = strtolower ($movie_path['type']);
    
    
    //retrieve the extension
    $ext = pathinfo ($Mname, PATHINFO_EXTENSION);
  
    $newname = time().".$ext";
    
    //check allowed extension
    
        move_uploaded_file ($tmp_loc, "video/$newname");

    $sql = "UPDATE movie_services SET genre_id='$genreid',movie_name='$moviename',rating='$rating',durations='$durations',releaseYear='$releaseYear',movie_path='$newname' where id='$Id'";
    $result = $this->con->query($sql);
   if($result){
       return true;
   }
   return false;
        
    }
    function deletefilm($id){
        $sql="DELETE FROM movie_services where id='$id'";
        $result = $this->con->query($sql);
        if($result){
            return true;
        }
        return false;
             
         }
    }

?>