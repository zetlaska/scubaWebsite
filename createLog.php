<?php 
include('db/server.php');
include('header/navUser.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/form.css" />
        <title>Log Your Dive - Megalodon</title>
    </head>
    <body>
        <div class="mx-auto mt-5 mb-2 bg-white text-black p-5" style=" height:fit-content; width:fit-content; border-radius: .30rem">
            <form action="createLog.php" method="POST">
                <h1 class="text-center mb-4">Log Your Dive</h1>
                <!--General Section-->
                <div class="row justify-content-center mb-3">
                    <h2>General</h2>
                </div>               
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">    
                        <label class="form-label"><h6>Dive Title</h6></label>
                        <input type="text" class="form-control" name="diveTitle">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Dive Site</h6></label>
                        <input type="text" class="form-control" name="diveSite">
                        <div class="form-text">Location of your dive.</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label" for="diveDate"><h6>Date</h6></label>
                        <input type="date" class="form-control" name="diveDate">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Type of Dive</h6></label>
                        <div class="form-text">How did you get in the water?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diveType" value="Shore">
                            <label class="form-check-label" for="diveType">Shore</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="diveType" value="Boat">
                            <label class="form-check-label" for="diveType">Boat</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diveType" value="Other">
                            <label class="form-check-label" for="diveType">Other</label>
                        </div>
                    </div>
                </div>
                <!--Depth/Time-->           
                <div class="row justify-content-left mb-3">
                        <h2>Depth/Time</h2>
                </div>
                <div class="row justify-content-left mb-3">
                    <div class="col-lg-3 col-sm-6">    
                        <label class="form-label"><h6>Max Depth</h6></label>
                        <input type="text" class="form-control" name="maxDepth">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Bottom Time</h6></label>
                        <input type="text" class="form-control" name="bottomTime">
                    </div>
                </div>
                <!--Conditions-->   
                <div class="row justify-content-center mt-5 mb-3">
                        <h2>Conditions<h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <label class="form-label"><h6>Weather</h6></label>
                        <div class="form-text">How was the weather?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Sunny" >
                            <label class="form-check-label" for="weather">Sunny</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Partly Cloudy" >
                            <label class="form-check-label" for="weather">Partly Cloudy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Cloudy" >
                            <label class="form-check-label" for="weather">Cloudy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Rainy" >
                            <label class="form-check-label" for="weather">Rainy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Windy" >
                            <label class="form-check-label" for="weather">Windy</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weather" value="Foggy" >
                            <label class="form-check-label" for="weather">Foggy</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Temperature (°C)</h6></label>
                        <div class="form-text mb-2">How was the temperature?</div>
                        <input type="text" class="form-control mb-2" name="tempAir" placeholder="Air Temperature">
                        <input type="text" class="form-control mb-2" name="tempSurface" placeholder="Surface Temperature">
                        <input type="text" class="form-control mb-2" name="tempBottom" placeholder="Bottom Temperature">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Water Type</h6></label>
                        <div class="form-text">What type of water was it?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterType" value="Salty" >
                            <label class="form-check-label" for="waterTpe">Salty</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterType" value="Fresh" >
                            <label class="form-check-label" for="waterTpe">Fresh</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Body of Water</h6></label>
                        <div class="form-text">What body of water did you dive in?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterBody" value="Ocean" >
                            <label class="form-check-label" for="waterType">Ocean</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterBody" value="Lake" >
                            <label class="form-check-label" for="waterType">Lake</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterBody" value="Quarry" >
                            <label class="form-check-label" for="waterType">Quarry</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterBody" value="River" >
                            <label class="form-check-label" for="waterType">River</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waterBody" value="Other" >
                            <label class="form-check-label" for="waterType">Other</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Visibility</h6></label>
                        <div class="form-text">How was the visibility</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" value="High" >
                            <label class="form-check-label" for="visibility">High</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" value="Average" >
                            <label class="form-check-label" for="visibility">Average</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" value="Low" >
                            <label class="form-check-label" for="visibility">Low</label>
                        </div>
                        <input type="text" class="form-control mb-2" name="visibility2" placeholder="How far could you see?">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Waves</h6></label>
                        <div class="form-text">How were the waves?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waves" value="None" >
                            <label class="form-check-label" for="waves">None</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waves" value="Small" >
                            <label class="form-check-label" for="waves">Small</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waves" value="Medium" >
                            <label class="form-check-label" for="waves">Medium</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="waves" value="Large" >
                            <label class="form-check-label" for="waves">Large</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Current</h6></label>
                        <div class="form-text">How was the current?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current" value="None" >
                            <label class="form-check-label" for="current">None</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current" value="Light" >
                            <label class="form-check-label" for="current">Light</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current" value="Medium" >
                            <label class="form-check-label" for="current">Medium</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="current" value="Strong" >
                            <label class="form-check-label" for="current">Strong</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Surge</h6></label>
                        <div class="form-text">How was the surge?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="surge" value="Light" >
                            <label class="form-check-label" for="surge">Light</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="surge" value="Medium" >
                            <label class="form-check-label" for="surge">Medium</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="surge" value="Strong" >
                            <label class="form-check-label" for="surge">Strong</label>
                        </div>
                    </div>
                </div>
                <!--Equipment-->   
                <div class="row justify-content-center mt-5 mb-3">
                    <h2>Equipment</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Suit</h6></label>
                        <div class="form-text">What suit did you wear?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="None" >
                            <label class="form-check-label" for="suit">None</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Full Suit 3MM" >
                            <label class="form-check-label" for="suit">Full Suit 3MM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Full Suit 5MM" >
                            <label class="form-check-label" for="suit">Full Suit 5MM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Full Suit 7MM" >
                            <label class="form-check-label" for="suit">Full Suit 7MM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Shorty" >
                            <label class="form-check-label" for="suit">Shorty</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Semi Dry" >
                            <label class="form-check-label" for="suit">Semi Dry</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="suit" value="Dry Suit" >
                            <label class="form-check-label" for="suit">Dry Suit</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Weight</h6></label>
                        <div class="form-text">How was the amount of weight you used?</div>
                        <input type="text" class="form-control mb-2" name="weight" placeholder="Weight (KG)">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weightType" value="Light" >
                            <label class="form-check-label" for="weightType">Light</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weightType" value="Good" >
                            <label class="form-check-label" for="weightType">Good</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="weightType" value="Heavy" >
                            <label class="form-check-label" for="weightType">Heavy</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Cylinder</h6></label>
                        <div class="form-text">What kind of cylinder did you use?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cylinderType" value="Steel" >
                            <label class="form-check-label" for="cylinderType">Steel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cylinderType" value="Aluminium" >
                            <label class="form-check-label" for="cylinderType">Aluminium</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cylinderType" value="Other" >
                            <label class="form-check-label" for="cylinderType">Other</label>
                        </div>
                        <input type="text" class="form-control mb-2" name="cylinderSize" placeholder="Cylinder Size">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Gas</h6></label>
                        <div class="form-text">What kind of gas did you use?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="Air" >
                            <label class="form-check-label" for="gas">Air</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="EANX32" >
                            <label class="form-check-label" for="gas">EANX32</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="EANX36" >
                            <label class="form-check-label" for="gas">EANX36</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="EANX40" >
                            <label class="form-check-label" for="gas">EANX40</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="Enriched" >
                            <label class="form-check-label" for="gas">Enriched</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="Trimex" >
                            <label class="form-check-label" for="gas">Trimex</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gas" value="Rebreather" >
                            <label class="form-check-label" for="gas">Rebreather</label>
                        </div>
                        <input type="text" class="form-control mb-2" name="oxygen" placeholder="Oxygen">
                        <input type="text" class="form-control mb-2" name="nitrogen" placeholder="Nitrogen">
                        <input type="text" class="form-control mb-2" name="helium" placeholder="Helium">
                    </div>                   
                </div>        
                <div class="row justify-content-left">
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Cylinder Pressure</h6></label>
                        <input type="text" class="form-control mb-2" name="cylinder1" placeholder="How much did you start with?">
                        <input type="text" class="form-control mb-2" name="cylinder2" placeholder="How much was remaining?">
                        <input type="text" class="form-control mb-2" name="cylinder3" placeholder="Amount Used">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Additional</h6></label>
                        <div class="form-text">What other gear did you wear?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="additional" value="Hood" >
                            <label class="form-check-label" for="additional">Hood</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="additional" value="Gloves" >
                            <label class="form-check-label" for="additional">Gloves</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="additional" value="Boots" >
                            <label class="form-check-label" for="additional">Boots</label>
                        </div>
                    </div>                   
                </div>
                <!--Experience-->
                <div class="row justify-content-center mt-5">
                    <div>
                        <h2>Experience</h2>
                    </div>                
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Feeling</h6></label>
                        <div class="form-text">How did you feel about this dive?</div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" value="Amazing" >
                            <label class="form-check-label" for="experience">Amazing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" value="Good" >
                            <label class="form-check-label" for="experience">Good</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" value="Average" >
                            <label class="form-check-label" for="experience">Average</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="experience" value="Poor" >
                            <label class="form-check-label" for="experience">Poor</label>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Note</h6></label>
                        <textarea class="form-control" placeholder="Write down your memories of this dive?" name="note" style="height: 100px"></textarea>                         
                    </div>
                    
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Buddy</h6><label>
                        <input type="text" class="form-control mb-2" name="buddy" placeholder="Who did you go with?">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label class="form-label"><h6>Dive Center</h6></label>
                        <input type="text" class="form-control mb-2" name="diveCenter" placeholder="What dive center did you dive with?">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit" name="createLog">Submit</button>
                    </div> 
                </div>
            </form>
        </div>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>


