<?php 
include "header.php";
require "adminClass.php";
$obj=new Admin;
$out=$obj->getMovies();
$r=$obj->get();

?>
<div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#pablo"> Table List </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                         <div class="col-md-12">
                             <div class="card strpied-tabled-with-hover">
                                 <div class="card-header ">
                                     <h4 class="card-title">Striped Table with Hover</h4>
                                     <p class="card-category">Here is a subtitle for this table</p>
                                 </div>
                                 <div class="card-body table-responsive">
                                     <table class="table table-hover table-striped">
                                         <thead>
                                             <th>ID</th>
                                             <th>Name</th>
                                            
                                             <th>description</th>
                                             <th>Duration</th>
                                             <th>Rating</th>
                                             <th>Starring</th>
                                             <th>Release Year</th>
                                             <th>Uploaded Date</th>
                                             <th></th>
                                         </thead>
                                         <tbody>
                                             <?php
                                             $counter = 1;
                                              
                                             foreach($out as $output) {
                                                 $id=$output['id'];
                                             ?>
                                             <tr>
                                                 <td><?php echo  $counter;?></td>
                                                
                                                 <td><?php echo $output['movie_name'];?></td>
                                                
                                                 <td><?php echo $output['descriptions'];?></td>
                                                 <td><?php echo $output['durations'];?></td>
                                                 <td><?php echo $output['rating'];?></td>
                                                 <td><?php echo $output['starring'];?></td>
                                                 <td><?php echo $output['releaseYear'];?></td>
                                                 <td><?php echo $output['updated_at'];?></td>
                                                 
                                                     <td><a href="view.php?result=<?php echo $output['id'];?>"><span><i aria-hidden="true"
                                                    class="fa fa-2x fa-edit"></i></span></a>
                                                    <a href="delete.php?result=<?php echo $r['id'];?>"  onclick='return confirm("Are you sure you want to delete this:")' class="ml-4"><i aria-hidden="true"
                                                    class="fa fa-2x fa-trash"></i></a></td>
                                                
                                            </tr>
                                            <?php
                                            
                                                    $counter++;
                                             }
                                            
                                             ?>
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8 hide" id="hide">
                             <div class="card">
               
            </div>
        </div>
    </div>
                
<?php 
require "footer.php";
?>
 