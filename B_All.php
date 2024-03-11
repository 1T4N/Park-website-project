<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_Files\B_All.css">
    <link rel="stylesheet" href="css_Files\accordion.css">
    
    <title>Document</title>
</head>
<body>

<!-- header -->
<?php
    include("html_Files\\header.html");
?>
    <div class="blur-overlay"></div>

    <section id="container">
        <!-- booking informations - needs to be toggled -->
        <form action="receipt.php" method="post" target="_blank" id="form">
            <section id="form">
                <section id="user_Info" class="form_Sections">
                    <div class="inputs">
                        <label for="fname">First Name:</label>
                        <input class="types_Size types_Decor"  type="text" placeholder="Input your first name" id="fname" name="fname" autofocus required>
                    </div>
                    <div class="inputs">
                        <label for="lname">Last Name:</label>
                        <input class="types_Size types_Decor"  type="text" placeholder="Input your last name" id="lname" name="lname"required>
                    </div>
                    <div class="inputs">
                        <label for="email">Email</label>
                        <input class="types_Size types_Decor"  type="email" placeholder="example@example.com" id="email" name="email">
                    </div>
                    <div class="inputs">
                        <label for="phone">Contact No</label>
                        <input class="types_Size types_Decor"  type="tel" id="phone" name="phone" placeholder="Ex. 0917-123-45678" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                    </div>
        
                    <div class="inputs">
                        <label for="schedule">Schedule</label>
                        <input type="datetime-local" id="schedule" name="schedule" required class="types_Size types_Decor">
                    </div>

                    <div class="inputs">
                        <label for="pasig">Pasigueño?</label>
                        <div id="pasigueno" class="types_Size types_Decor" style="background-color:rgba(255, 255, 255, 0);">
                            <div>
                                <input type="radio" id="yes" name="pasigueno" value="You're a Pasigueño!" required>
                                <label for="yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="no" name="pasigueno" value="You're not a Pasigueño!">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>




                    <hr style="width:100%;text-align:left;margin-left:0; background-color:white;">




                    
                    <div class="inputs">
                        <label for="comment">Comments:</label>
                    </div>
                    <textarea class="types_Decor" id="comment" name="comment" rows="6" cols="50" placeholder="Leave a message?"></textarea>

                    
                    <div class="inputs">
                        <div>Payment Method</div>
                        <div id="pasigueno" class="types_Size types_Decor" style="background-color:rgba(255, 255, 255, 0);">
                            <div>
                                <input type="radio" name="cards" value="GCash" id="Gcash" required>
                                <label for="Gcash">Gcash</label>
                            </div>
                            <div>
                                <input type="radio" name="cards" value="Paypal" id="Paypal">
                                <label for="Paypal">Paypal</label>
                            </div>
                            <div>
                                <input type="radio" name="cards" value="Paymaya" id="Paymaya">
                                <label for="Paymaya">Paymaya</label>
                            </div>
                        </div>
                    </div>

        
                    <div id="buttons">
                        <input style="letter-spacing: 0px; padding: 5px;" class="btnBooking" type="button" value="CANCEL" onclick="window.location.href='index.php';">
                        <input style="letter-spacing: 0px; padding: 5px;" class="btnBooking" type="submit" value="CONFIRM" name="confirm" onclick="validateForm()">
                    </div>
                </section>
            </section>


            <section id="info">
                <section>
                    <button class="accordion bypassButton" >
                        <input type="checkbox" name="nature_Checkbox[]" id="Butterfly_Pavillion" value="Butterfly Pavillion" class="checkbox" >
                        <label for="Butterfly_Pavillion">Butterfly Pavillion</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños (one-entry) - 10.00Php</li>
                            <li>Non-Pasigueños (one-entry) - 20.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="nature_Checkbox[]" value="Flower Park" id="flower_Park" class="checkbox">
                        <label for="flower_Park">Flower Park</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños (one-entry) - 10.00Php</li>
                            <li>Non-Pasigueños (one-entry) - 20.00Php</li>
                        </ul>
                    </div>
                </section>


                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="nature_Checkbox[]" value="Pasig Zoo" id="pasig_Zoo" class="checkbox">
                        <label for="pasig_Zoo">Pasig Zoo</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños (one-entry) - 10.00Php</li>
                            <li>Non-Pasigueños (one-entry) - 20.00Php</li>
                        </ul>
                    </div>
                </section>

                


                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="leisure_Checkbox[]" value="Rapid Rides" id="Rapid_Rides" class="checkbox">
                        <label for="Rapid_Rides">Rapid Rides</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños (one-way) - 30.00Php</li>
                            <li>Non-Pasigueños (one-way) - 50.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                         <input type="checkbox" name="leisure_Checkbox[]" value="Waterpark Pavillion" id="Water_Park" class="checkbox">
                        <label for="Water_Park">Waterpark Pavillion</label> 
                    </button>
                    <div class="panel">
                        <ul>
                            <li>1st 3 Hours - 2,000.00Php</li>
                            <li>Per succeeding hour/s - 500.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                         <input type="checkbox" name="leisure_Checkbox[]" value="Amphitheater" id="Amphitheater" class="checkbox">
                        <label for="Amphitheater">Amphitheater</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>1st 3 Hours - 2,000.00Php</li>
                            <li>Per succeeding hour/s - 5,000.00Php</li>
                        </ul>
                    </div>
                </section>


                <!-- this is the multiple iteration -->
                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="leisure_Checkbox[]" value="Picnic Ground" id="Picnic_Ground" class="checkbox">
                                <label for="Picnic_Ground">Picnic Ground</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>1st 3 Hours - 200.00Php</li>
                            <li>Per succeeding hour/s - 100.00Php</li>
                        </ul>
                    </div>
                </section>


                <section>
                    <button class="accordion bypassButton">
                         <input type="checkbox" name="leisure_Checkbox[]" value="Mini Train" id="Mini_Train" class="checkbox">
                                <label for="Mini_Train">Mini Train</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños - 10.00Php</li>
                            <li>Non-Pasigueños - 20.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="leisure_Checkbox[]" value="Boat Rental" id="Boat_Rental" class="checkbox">
                            <label for="Boat_Rental">Boat Rental</label> 
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños - 40.00Php</li>
                            <li>Non-Pasigueños - 50.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                         <input type="checkbox" name="adventure_Checkbox[]" value="MAZE Garden" id="MAZE_Garden" class="checkbox">
                        <label for="MAZE_Garden">MAZE Garden</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Non-Pasigueños or Pasigueños (one-entry) - 10.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                         <input type="checkbox" name="adventure_Checkbox[]" value="Zip Line" id="Zip_Line" class="checkbox">
                        <label for="Zip_Line">Zip Line</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños - 80.00Php </li>
                            <li>Non-Pasigueños - 130.00Php</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <button class="accordion bypassButton">
                        <input type="checkbox" name="adventure_Checkbox[]" value="Obstacles Courses" id="Obstacles" class="checkbox">
                        <label for="Obstacles">Obstacles Courses</label>
                    </button>
                    <div class="panel">
                        <ul>
                            <li>Pasigueños (3 Hours) - 100.00Php <br> Per succeeding hour/s - 50.00Php</li>
                            <li>Non-Pasigueños (3 Hours) - 150.00Php <br> Per succeeding hour/s - 50.00Php</li>
                        </ul>
                    </div>
                </section>


             </section>
        </form>

    </section>


<!-- footer -->
<?php
    include("html_Files\\footer.html");
?>



<script src="js_Files\accordion.js"></script>
</body>
</html>