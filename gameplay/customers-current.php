<?php
 include_once "connect.php";
 ?>
<section id="display">
    <!--Displays graphics based on what the player is currently doing. ie showing Research Facility while selecting active research-->
    <h1>Current Customers</h1>
    <!--copied from foodDisplayer to test showing items with an associated value, IE Character Name-->
<section class="dog-table-display">
       
          <!--Displays available dogs from the database. dogs with hiring value 'yes' will be shown. dynamic fill!!!-->
          <section class="dog-display">
        <?php 
        $sql= "SELECT * FROM customerbase WHERE hiring = 'yes';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
       
        
        if ($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)){
                
                
                echo"    <div class=new-dog-container>
                <img class=\"new-dog-icon\" src=\"http://localhost/Puppy Play Pen/img/dogs/$row[customerPetIcon]\">
                    <div class=\"new-dog-title\">
                    <a href=\"\"><p class=\"new-dog-name\">$row[customerPetName]</p></a>
                    <p class=\"new-dog-name-2\">$row[customerIncomeValue]</p>
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
<!--
     <section class="test-display">
     <div class="test-container">
                    <div class="test-title">
                        <img src="img/alchemylabCOOKIECLICKERASSET.png">
                        <h4 class="test-name"> Mittens </h4>
                    </div>
                        

                    <section class="test-numbers">
                        <div class="test-four-container">
                            <section class="test-four-container-item" id="tfci-food">}{</section>
                            <section class="test-four-container-item" id="tfci-water">}{</section>
                           
                        </div>
                        <div class="test-four-container">
                        <section class="test-four-container-item" id="tfci-play">}{</section>
                            <section class="test-four-container-item" id="tfci-maint">}{</section>
                        </div>
                    
                    </section>
                </div>
     </section>
    
        


      
                            --> 
                            </section>
                            </section>
        <section id="interface">
    <!--Interactive interface for gameplay-->
            <ol>
                <li>-give dogs food water and play icons</li>
                <li>-show dogs instead of customers</li>
                <li>-decide on how dogs stay, overall gameplay</li>
                <li>-make for fast paced gameplay targeted at moving people, aiming for 15-30 minute sessions or mix in long term elements like neopets</li>
                <li>Cruiser</li>
                <li>Bomber</li>
                <li>Battleship</li>
                <li>Deathstar</li>
            </ol>
        </section>
    </main>
    </body>