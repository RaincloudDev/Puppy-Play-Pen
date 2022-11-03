<?php
 include_once "connect.php";
 ?>
<section id="display">
    <!--Displays graphics based on what the player is currently doing. ie showing Research Facility while selecting active research-->
    <h1 class="page-title">Training Center</h1>
    <?php echo "<img class='action-image' src='http://localhost/Puppy Play Pen/img/training.png'>"?>
    <section class="dog-table-display">
       
       <!--Displays available dogs from the database. dogs with hiring value 'yes' will be shown. dynamic fill!!!-->
       <section class="dog-display">
     <?php 
     $sql= "SELECT * FROM trainingcenter WHERE 1";
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);
    
     
     if ($resultCheck > 0) {
         while($row = mysqli_fetch_assoc($result)){
             
             
             echo"    <div class=new-dog-container>
             <img class=\"new-dog-icon\" src=\"http://localhost/Puppy Play Pen/img/dogs/1.png\">
                 <div class=\"new-dog-title\">
                 <a href=\"\"><p class=\"new-dog-name\">$row[trainingName]</p></a>
                 <p class=\"new-dog-name-2\">$row[costMod]</p>
                 </div>
             <hr>
             <div class=\"new-dog-bar-container\">
                 <section class=\"new-dog-bar\" id=\"new-dog-hunger\"><img src=\"http://localhost/Puppy Play Pen/img/20x20/food20x20.png\"> </section>
                 <section class=\"new-dog-bar\" id=\"new-dog-thirst\"><img src=\"http://localhost/Puppy Play Pen/img/20x20/water20x20.png\"></section>
                 <section class=\"new-dog-bar\" id=\"new-dog-play\"><img src=\"http://localhost/Puppy Play Pen/img/20x20/play20x20.png\"></section>
                 <section class=\"new-dog-bar\" id=\"new-dog-upkeep\"><img src=\"http://localhost/Puppy Play Pen/img/20x20/upkeep20x20.png\"></section>
             </div>
         </div>";  
         }
     }?>
  </section>
        <section id="interface">
    <!--Interactive interface for gameplay-->
            <ol>
                <li>Puppy Training</li>
                <li></li>
                <li>Nano Tech</li>
                <li>Computer Tech</li>
                <li>Armor Tech</li>
                <li>Weapons Tech</li>
                <li>Gamma Tech</li>
            </ol>
        </section>
    </main>
    </body>