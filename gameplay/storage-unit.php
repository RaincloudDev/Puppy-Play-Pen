<?php
 include_once "connect.php";
 ?>

<section id="display">
    <!--Displays graphics based on what the player is currently doing. ie showing Research Facility while selecting active research-->
    <h2 class="page-title">Storage Unit</h2>
    <?php echo "<img class='action-image' src='http://localhost/RPGnewBasicOgame/img/mines.png'>"?>
        <section class="building-display">
            <div>
                <h4>Your Stuff is in here!</h4>
                <p>Click about to find it..</p>
            </div>
            <div>
            <section class="branch-display">
            
            <?php 
        $sql= "SELECT * FROM `branch` WHERE 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
       
        
        if ($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)){
                
                
                echo"<div class=branch-container>
                <img class=\"new-dog-icon\" src=\"http://localhost/Puppy Play Pen/img/bankCOOCKIECLICKERASSET.png\">
                    <div class=\"new-dog-title\">
                    <a href=\"\"><p class=\"new-dog-name\">$row[branchName]</p></a>
                    <p class=\"new-dog-name-2\">$row[branchDesc]</p>
                    </div>
                <hr>
                <div class=\"new-dog-title\">
                    <span class=\"new-dog-bar\" id=\"new-dog-hunger\"><img src=\"http://localhost/Puppy Play Pen/img/20x20/food20x20.png\"></span>
                    <span><p>Lvl UP</p></span>
                    
                </div>
            </div>";  
            }
        }?>
    
            






    
            </section>
            </div>
        </section>
    </div>
        </section>
    </section>
        <section id="interface">
    <!--Interactive interface for gameplay-->
            <ol>
                <li>Metal Mine</li>
                <li>Crystal Mine</li>
                <li>Deuterium Synthisizer</li>
                <li>Solar Plant</li>
                <li>Solar Satellites</li>
                <li>Coal Plant</li>
                <li>Metal Storage</li>
                <li>Crystal Storage</li>
                <li>Deuterium Storage</li>
            </ol>
        </section>
    </main>
    </body>