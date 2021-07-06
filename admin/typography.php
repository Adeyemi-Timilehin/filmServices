<?php 
include "header.php";
require "adminClass.php";
$obj=new Admin;
$out=$obj->getMovies();
$r=$obj->get();

?>

             <!-- End Navbar -->
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card strpied-tabled-with-hover">
                                 <div class="card-header ">
                                     <h4 class="card-title">Overview of the Films on Store</h4>
                                    
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
 