<?php 
//session_start();
//include('../constant/check.php');?>
<?php 
include('../constant/check.php');
 include('../constant/connect.php');
   
 
    ?>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php 
                                $sql = "select * from admin where id = '".$_SESSION["id"]."'";
                                $query=$con->query($sql);
                                while($row=mysqli_fetch_array($query))
                                    {
                                      //print_r($row);
                                      extract($row);
                                      $fname = $row['fname'];
                                      $lname = $row['lname'];
                                      $email = $row['email'];
                                      $contact = $row['contact'];
                                      $dob1 = $row['dob'];
                                      $gender = $row['gender'];
                                      $image = $row['image'];
                                    }
                                    ?>
                                    <img src="../assets/uploadImage/Profile/<?=$image?>" alt="user" class="profile-pic" /></a>
                                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                        <ul class="dropdown-user">
                                            <li><a href="change_pwd.php"><i class="ti-key"></i> Changed Password</a></li>
                                            <li><a href="../constant/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
    </div>
        <!-- End header header -->
