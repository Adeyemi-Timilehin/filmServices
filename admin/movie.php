<?php
require "header.php";
require "adminClass.php";
$obj=new Admin;
 
?>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo"> Table List </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-palette"></i>
                            <span class="d-lg-none">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-planet"></i>
                            <span class="notification">5</span>
                            <span class="d-lg-none">Notification</span>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#">Notification 1</a>
                            <a class="dropdown-item" href="#">Notification 2</a>
                            <a class="dropdown-item" href="#">Notification 3</a>
                            <a class="dropdown-item" href="#">Notification 4</a>
                            <a class="dropdown-item" href="#">Another notification</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-zoom-split"></i>
                            <span class="d-lg-block">&nbsp;Search</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon">Account</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon">Dropdown</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon">Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                     <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Genre Section</h4>
                            <p class="card-category"> Add to Collection of the Genre</p>
                        </div>
                        <div class="card-body">
                            <form action="genreprocess.php" method="post">
                            <h3>Genre Section</h3> 
                                <div class="input_field">
                                    <input type="text" name="mygenre" placeholder="Genre" class="form-control mb-3" />
                                </div>

                                <div class="form-group">
                                    <label for="my-textarea">Text</label>
                                    <textarea id="my-textarea" class="form-control" name="description"
                                        rows="3"></textarea>
                                </div>
                                <input type="submit" value="Add Genres" class="btn btn-info" name="genre" />
                            </form>        
                        </div>
                     </div>
                </div>
                <div class='col-md-6'>
                <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">Genre Section</h4>
                            <p class="card-category"> Add to Collection of the Genre</p>
                        </div>
                        <div class="card-body">
                            <form action="genreprocess.php" method="post" enctype="multipart/form-data">
                            <h3>Genre Section</h3> 
                                <div>
                                <?php $obj->getGenre();?>
                                </div>
                                <div class="input_field mt-2">
                                    <input type="text" name="movie_name" placeholder="Movie name" class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2">
                                    <input type="file" name="movie_path" placeholder="Movie name" class="form-control mb-3" />
                                </div>
                                
                                <div class="input_field mt-2">
                                    <input type="text" name="rating" placeholder="Rating" class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2">
                                    <input type="number" name="durations" placeholder="durations" class="form-control mb-3" />
                                </div>
                                <div class="input_field mt-2">
                                    <input type="month" name="releaseYear" placeholder="Movie name" class="form-control mb-3" />
                                </div>
    
                               
                                <div class="form-group">
                                    <label for="my-textarea">Starring</label>
                                    <textarea id="my-textarea" class="form-control" name="starring"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="my-textarea">Descriptions</label>
                                    <textarea id="my-textarea" class="form-control" name="descriptions"
                                        rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="my-textarea">Casts</label>
                                    <textarea id="my-textarea" class="form-control" name="cast"
                                        rows="3"></textarea>
                                </div>
                                <input type="submit" value="Add Movies" class="btn btn-primary" name="movie" />
                            </form>        
                        </div>
                     </div>
                   
                </div>
                    
        
            </div>
        
        </div>
                   
    </div>
</div>
            <?php 
    require "footer.php";
    ?>