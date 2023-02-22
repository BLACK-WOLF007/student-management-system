<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@200&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow:wght@900&family=Cormorant+Garamond&family=Dancing+Script&family=Fira+Sans:wght@300&family=Fredoka+One&family=Inter:wght@200&family=Kanit:ital,wght@0,900;1,700;1,900&family=Libre+Baskerville&family=Lobster&family=Manjari&family=Montserrat+Alternates:wght@300&family=Open+Sans:wght@300&family=Passions+Conflict&family=Poppins:wght@200;300;700&family=Raleway:wght@300&family=Righteous&family=Rubik:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>Dashboard</title>

</head>
<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<body>
   
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><span class="material-symbols-outlined" style="font-size: 28px;">
            grid_view
            </span>&nbsp; About</a>
        <a href="#"><span class="material-symbols-outlined" style="font-size: 28px;">
            insights
            </span>&nbsp; Services</a>
        <!-- <a href="#"<span class="material-symbols-outlined">
            description
            </span>Contact</a> -->
        <a href="#"><span class="material-symbols-outlined" style="font-size: 28px;">
            mail
            </span>&nbsp; Contact</a>
            <a href="#"><span class="material-symbols-outlined" style="font-size: 28px;">
                insert_chart
                </span>&nbsp; Graph</a>
                <a href="#"><span class="material-symbols-outlined" style="font-size: 28px;">
                    find_in_page
                    </span>&nbsp; Find</a>
                    <a href="logout.php"><span class="material-symbols-outlined" style="font-size: 28px;">
                        logout
                        </span>&nbsp; Exit</a>
      </div>
      
      <div id="main">
        <span style="font-size:30px;cursor:pointer; color:var(--secondary-color); position: absolute; z-index: 0;  top: 2.2rem; margin-left: 4rem;" onclick="openNav()">&#9776; </span>
        <div class="header">
            <ul>
                <li>DASHBOARD</li>
                <li><input type="search" placeholder="Search"></li>
                <li style="font-size: 13px; color: var(--color12);"><a href="#demo-modal" style="font-size: 13px; color: var( --secondary-color); text-decoration:none;">01 February 2023</a></li>
                <li><button style="color: var( --secondary-color); border: none;background: transparent;"><span id="icon" class="material-symbols-outlined">
                    toggle_off
                    </span></button></li>
                <li><a href="#demo-modal3" style="font-size: 13px; color: var( --secondary-color); text-decoration:none;"><span class="material-symbols-outlined">
                    notifications_active
                    </span></a></li>
                <li><a href="#demo-modal2" style="font-size: 13px; color: var( --secondary-color); text-decoration:none;"><img style="width: 3%; padding-top: 1rem;" src="https://www.clipartmax.com/png/full/339-3392130_gardener-png-file-circle-profile-picture-cartoon.png"></a></li>
            </ul>
        </div>
        <div class="imp-part">
            <div class="hello">
                
                <h1>Welcome Back <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1><br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br> Temporibus perspiciatis illum nemo commodi! </p>
                <img src="helloimg-removebg-preview.png" style="margin-left: 50rem; margin-top: -9rem; width:20%">
            </div>
<!-- modal -->

<div id="demo-modal" class="modal">
    <div class="modal__content">
         <h1> Made By Fauzan Ali</h1>

        <a href="#" class="modal__close">&times;</a>
    </div>
</div>
<div id="demo-modal2" class="modal2">
    <div class="modal__content2">
         <img src="Fauzan-img.jpeg" alt="Fauzan Image" style="width:40%; border-radius:5%; margin-left:8rem;">
             <h1 style=" margin-left:6rem; color:#000;">Developer: Fauzan Ali</h1>
        <a href="#" class="modal__close2">&times;</a>
    </div>
</div>

<div id="demo-modal3" class="modal3">
    <div class="modal__content3">
         <h1> No Notifications </h1>

        <a href="#" class="modal__close3">&times;</a>
    </div>
</div>

<!-- modal ends -->
            <div class="team">
                <h3>Team Statistics</h3>
                <ul>
                    <li><div class="numbering" style="background: var(--color14);">
                        
                        <h1>213</h1>
                        <p>Activ members</p>
                        <span class="material-symbols-outlined" style="top: -4rem; position: relative; margin-left: 11rem;">
                            more_vert
                                </span>
                                
                    </div></li>
                    <li><div class="numbering" style="background: var(--color14);">
                        <h1>110+</h1>
                        <p>Total Sales</p>
                        <span class="material-symbols-outlined" style="top: -4rem; position: relative; margin-left: 11rem;">
                            more_vert
                                </span>
                    </div></li>
                    <li><div class="numbering" style="background: var(--color14);">
                        <h1>213</h1>
                        <p>Transactions</p>
                        <span class="material-symbols-outlined" style="top: -4rem; position: relative; margin-left: 11rem;">
                            more_vert
                                </span>
                    </div></li>
                    <li>
                        <h2 style="margin-top:-4.9rem;position: absolute;">Reminder</h2>
                        <div class="numbering1" style="position:relative; top: -2.1rem;">
                        <h2>Design Meet</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur. </p>
                    </div></li>
                </ul>
            </div>
            <div class="team" style="margin-top: 0rem;">
                
                <ul style="margin-left:0rem;">
                    <li ><h3>Status Board</h3></li>
                    <li style="padding-left: 1px; margin-left: 22rem;"><a href="reset-password.php"><span class="material-symbols-outlined">
                        share
                        </span></a></li style="padding-left: 1px;">
                    <li style="padding-left: 1px;"><a href="read.php"><span class="material-symbols-outlined">
                        search
                        </span></a></li>
                    <li style="padding-left: 1px;"><a href="create.php"><span class="material-symbols-outlined">
                        edit_note
                        </span></a></li>
                    <li style="padding-left: 1px;"><a href="delete.php"><span class="material-symbols-outlined">
                        delete
                        </span></a></li>
                    <li style="padding-left: 1px;"><a href="update.php"> <span class="material-symbols-outlined">
                        tune
                        </span></a></li>
                </ul>
                <ul>
                    <li><div class="numbering3">
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM users";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table>';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>USERNAME</th>";
                                        echo "<th>PASSWORD</th>";
                                        echo "<th>CREATED_AT</th>";
                                        // echo "<th>STATUS</th>";
                                        // echo "<th>CONTACTS</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr class='data'>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['password'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                        <!-- <table>
                            <tr>
                                <th>NAME</th>
                                <th>ID</th>
                                <th>POSITION</th>
                                <th>TEAM</th>
                                <th>STATUS</th>
                                <th>CONTACTS</th>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://avatars.githubusercontent.com/u/68487488?v=4">&nbsp; <span >Fauzan Ali </span ></td>
                                <td>00781</td>
                                <td>Sr.Developer</td>
                                <td>Web Development</td>
                                <td class="active"><span class="material-symbols-outlined" style="font-size:5px;">
                                    trip_origin
                                    </span>Active</td>
                                <td>+91 6389859901</td>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://www.rmeoc.org/wp-content/uploads/2018/01/circular-photo.png">&nbsp; <span >Fauzan Ali </span ></td>
                                <td>00782</td>
                                <td>Art Director</td>
                                <td>Design</td>
                                <td class="active"><span class="material-symbols-outlined" style="font-size:5px;">
                                    trip_origin
                                    </span>Active</td>
                                <td>+91 6389859901</td>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://www.seerinteractive.com/hubfs/Team%20Member%20Headshots/meagan-jubb-seer-headshot.png">&nbsp; <span > Nikalson </span ></td>
                                <td>00770</td>
                                <td>Designer</td>
                                <td>Design</td>
                                <td class="break"><span class="material-symbols-outlined" style="font-size:5px;">
                                    trip_origin
                                    </span>On Brake</td>
                                <td>+91 6389859901</td>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://www.rmeoc.org/wp-content/uploads/2018/01/circular-photo.png">&nbsp; <span > Robert</span ></td>
                                <td>00799</td>
                                <td>seo</td>
                                <td>Seo</td>
                                <td class="active"><span class="material-symbols-outlined" style="font-size:5px;">
                                    trip_origin
                                    </span>Active</td>
                                <td>+91 6389859901</td>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://www.seerinteractive.com/hubfs/Team%20Member%20Headshots/meagan-jubb-seer-headshot.png">&nbsp; <span >Julia </span ></td>
                                <td>00751</td>
                                <td>Marketer</td>
                                <td>Marketing</td>
                                <td class="active" >
                                    <span class="material-symbols-outlined" style="font-size:5px;">
                                        trip_origin
                                        </span>Active</td>
                                <td>+91 6389859901</td>
                            </tr>
                            <tr class="data">
                                <td><img style="width: 30%;" src="https://i0.wp.com/flourishcounselingmilwaukee.com/wp-content/uploads/2015/08/matt-circle-profile-updated.png">&nbsp; <span >Nick</span ></td>
                                <td>00781</td>
                                <td>Corrector</td>
                                <td>R&D</td>
                                <td class="out"><span class="material-symbols-outlined" style="font-size:5px;">
                                    trip_origin
                                    </span>Stay Out</td>
                                <td>+91 6389859901</td>
                            </tr> -->
                            
                        <!-- </table> -->
                    </div></li>
                    <li class="graph">
                        <h2 style="margin-top:-2.7rem;position: absolute;">Progress</h2>
                        <div class="numbering13">
                        <h2>Design Meet</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur. </p>
                    </div></li>
                    <li class="graph" style="margin-top: 8rem;">
                        <div class="numbering13" style="background-image: url('img2.jpeg')">
                            
                              <div style="margin-top: .5rem; margin-left: 4rem; font-size: 11px;">
                        <h2>Design Meet</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur. </p></div>
                    </div></li>
                    <li class="graph" style="margin-top: 16rem;">
                        <div class="numbering13" style="background: url('img3.jpeg') 100%;">
                        <div style="width:70px; margin-left: -1rem;">
                                <canvas id="myChart"></canvas>
                              </div>
                              
                              <div style="margin-top: -4rem; margin-left: 4rem; font-size: 11px;">
                        <h2>Design Meet</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur. </p></div>
                    </div></li>
                    <li class="graph" style="margin-top: 25rem;">
                        <div class="numbering13" style="background:url('img4.jpeg')">
                        
                        <h2>Design Meet</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur. </p>
                    </div></li>
                </ul>
            </div> 
            <div class="new-graph">
            <div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>
            </div>
            <div class="new-graph" style="float: right;margin-top: -25rem;">
                <div>
                    <canvas id="myChart1"></canvas>
                  </div>
            </div>
            <div class="new-graph2">
                <div>
                    <canvas id="myChart11"></canvas>
                  </div>
            </div>
            <p class="cp-text" style="color:var( --secondary-color); margin-left:35rem;font-size:13px;">
    © Copyright 2023 Fauzan Ali. All rights reserved.
</p>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "200px";
      document.getElementById("main").style.marginLeft = "80px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "50px";
      document.getElementById("main").style.marginLeft= "0px";
    }
    const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
        
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
   
  });
  google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',54.8],
  ['France',48.6],
  ['Spain',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

var options = {
  title:'World Wide Wine Production',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}

  var icon = document.getElementById('icon');

  icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
  }
</script>
</html>