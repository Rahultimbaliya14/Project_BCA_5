<?php
session_start();
if(isset($_SESSION['usernameadmin']) && isset($_SESSION['passwordadmin'])){
        include('../include/dbconnect.php');
        // echo $_SESSION['name'];
        //echo $_SESSION['idadmin'];
        // echo $_SESSION['username'];
        //  echo $_SESSION['su'];
       }
       else{
        header("Location: ../../Views/LoginTwo.php?error2=Login is Require");
        }
?>      
<script src="https://kit.fontawesome.com/0f900b0930.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="../Css/home.css">
<div class="manu" style=" width: 100%;">
         <div class="imgage">
        <p class="name"><?php echo $_SESSION['nameadmin'];?><i class="fa-solid fa-check"></i></p>
        <button class="profilebtn"><i class="fa-solid fa-id-card-clip"></i><a href="../View/adminprofile.php?first=1&id=<?php echo $_SESSION['idadmin'];?>">Profile</a></button> 
        <?php
        if($_SESSION['su']==='yes' || $_SESSION['su']==='sudo' ){?>
        <a class="logout" href="../../Views/index.php?t=1">Log&nbsp;<i class="bi bi-box-arrow-in-left"></i>&nbsp;Out</a> 
        <?php
        }
        ?>     
         </div>
        
        <ul>
        <li class="active"><i class="fa-solid fa-gauge"></i><a href="../View/Home.php">Dashbord</a></li>
        <li><i class="fa-solid fa-ticket"></i><a href="#">Tickets</a>
                <div class="sub-manu1">
                        <ul>
                                <li><a href="#"><i class="bi bi-journal-album"></i>&nbsp;Official</a>
                                        <div class="ssub-manu1">
                                                <ul>
                                                        <li><a href="../View/official_national.php"><i class="fa-solid fa-tag"></i>National</a></li>
                                                        <li><a href="../View/official_International.php"><i class="fa-solid fa-earth-americas"></i>International</a></li>
                                                </ul>
                                        </div>
                                </li>
                                <li><a href="#"><i class="bi bi-globe2"></i>&nbsp;Online</a>
                                        <div class="ssub-manu1">
                                        <ul>
                                                <li><a href="../View/online_national.php"><i class="fa-solid fa-tag"></i>National</a></li>
                                                <li><a href="../View/online_international.php"><i class="fa-solid fa-earth-americas"></i>International</a></li>
                                        </ul>
                                        </div>
                                </li>
                                <li><a href="../View/canceled.php"><i class="fa-solid fa-xmark"></i>Canceled </a>

                                </li>
                                <li><a href="../View/editprise.php"><i class="fa-solid fa-pen-to-square"></i>Edit Prise</a>

                                </li>
                        </ul>
                </div>
        </li>
        <li><a href=""><i class="fa-solid fa-user-group"></i></i>User's</a>
        <div class="sub-manu1">
                    <ul>
                        <li><a href="../View/Adduser.php"><i class="bi bi-person-plus"></i>&nbsp;Add User</a></li>
                        <li><a href="../View/ViewUser.php">View User</a></li>
                    </ul>
        </div>
       </li>
        <li><a href=""><i class="fa-regular fa-images"></i>Gallary</a>
              <div class="sub-manu1">
                        <ul>
                                <li><a href="../View/addanimal.php"><i class="bi bi-plus-circle-dotted"></i>&nbsp;Add Animal</a></li>
                                <li><a href="../View/viewanimal.php">View Animal</a></li>
                        </ul>
              </div>
        </li>
        <li><a href=""><i class="bi bi-person-workspace"></i>&nbsp;Official User</a>
               <div class="sub-manu1">
                        <ul>
                                <li><a href="../View/Addoficialuser.php"><i class="bi bi-person-plus"></i>&nbsp;Add User</a></li>
                                <li><a href="../View/ViewOficialuser.php">View User</a></li>
                        </ul>
              </div>
       </li>
       <?php
         if($_SESSION['su']==='yes' || $_SESSION['su']==='sudo' ){?>
        <li><a href=""><i class="bi bi-person-badge">&nbsp;</i>Admin</a>                  
               <div class="sub-manu1">
                        <ul>
                                <li><a href="../View/AddAdmin.php"><i class="bi bi-person-plus-fill"></i>&nbsp;Add Admin</a></li>
                                <li><a href="../View/ViewAdmin.php">View Admin</a></li>
                        </ul>
              </div>
        </li>
        <?php
         }
         else{?>
                <li>
                <a class="logout" href="../../Views/index.php?t=1">Log&nbsp;<i class="bi bi-box-arrow-in-left"></i>&nbsp;Out</a>
                </li>
        <?php
         }
        ?>
       <img src="../Images/1pngwing.com.png" width="200px" height="200">
        </div>
        <div class="feedback">
           
        </div>