<?php
require "adminClass.php";
$obj=new Admin;
if(!empty($_POST['genre'])){
    $genre=htmlspecialchars(strip_tags($_POST['genre']));
    $dec=htmlspecialchars(strip_tags($_POST['description']));
    $obj->insertGenre($genre,$dec);
}

?>                                     

                                    <div class="container offset-2 mt-5">
                                                <!-- Genres section -->
                                                <h3>Genre Section</h3>
                                        <form action="" method="post">
                                        <div class="input_field">
                                            <input type="text" name="genre" placeholder="Genre" class="form-control mb-3" />
                                        </div>

                                           <div class="form-group">
                                               <label for="my-textarea">Text</label>
                                               <textarea id="my-textarea" class="form-control" name="description" rows="3"></textarea>
                                           </div>
                                            <input type="submit" value="Add Genres" name="genre/>
                                            </form>
                                           
                                            </div>

<php
require "footer.php";
?>