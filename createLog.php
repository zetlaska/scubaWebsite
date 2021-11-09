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
        <form>
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center mb">
                        <h1>Log Your Dive</h1>
                    </div>
                </div> 
                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <h2>General</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">    
                            <label class="form-label"><h6>Dive Title</h6></label>
                            <input type="text" class="form-control" id="diveTitle">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Dive Site</h6></label>
                            <input type="text" class="form-control" id="diveTitle">
                            <div class="form-text">Location of your dive.</div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Date</h6></label>
                            <input id="startDate" class="form-control" type="date" />
                            <span id="startDateSelected"></span>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Type of Dive</h6></label>
                            <div class="form-text">How did you get in the water?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Shore</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Boat</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Other</label>
                            </div>
                        </div>
                    </div>           
                    <div class="row justify-content-left mb-3">
                            <h2>Depth/Time</h2>
                    </div>
                    <div class="row justify-content-left mb-3">
                        <div class="col-lg-3 col-sm-6">    
                            <label class="form-label"><h6>Max Depth</h6></label>
                            <input type="text" class="form-control" id="diveTitle">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Bottom Time</h6></label>
                            <input type="text" class="form-control" id="diveTitle">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5 mb-3">
                            <h2>Conditions<h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <label class="form-label"><h6>Weather</h6></label>
                            <div class="form-text">How was the weather?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Sunny</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Partly Cloudy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Cloudy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Rainy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Windy</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Foggy</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Temperature (°C)</h6></label>
                            <div class="form-text mb-2">How was the temperature?</div>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Air Temperature">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Surface Temperature">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Bottom Temperature">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Water Type</h6></label>
                            <div class="form-text">What type of water was it?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Salty</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Fresh</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Body of Water</h6></label>
                            <div class="form-text">What body of water did you dive in?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Ocean</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Lake</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Quarry</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">River</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Other</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Visibility</h6></label>
                            <div class="form-text">How was the visibility</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">High</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Average</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Low</label>
                            </div>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="How far could you see?">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Waves</h6></label>
                            <div class="form-text">How were the waves?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">None</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Small</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Medium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Large</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Current</h6></label>
                            <div class="form-text">How was the current?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">None</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Light</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Medium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Strong</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Surge</h6></label>
                            <div class="form-text">How was the surge?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Light</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Medium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Strong</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5 mb-3">
                        <h2>Equipment</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Suit</h6></label>
                            <div class="form-text">What suit did you wear?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">None</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Full Suit 3MM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Full Suit 5MM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Full Suit 7MM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Shorty</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Semi Dry</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Dry Suit</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Weight</h6></label>
                            <div class="form-text">How was the amount of weight you used?</div>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Weight (KG)">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Light</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Good</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Heavy</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Cylinder</h6></label>
                            <div class="form-text">What kind of cylinder did you use?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Steel</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Aluminium</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Other</label>
                            </div>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Cylinder Size">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Gas</h6></label>
                            <div class="form-text">What kind of gas did you use?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Air</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">EANX32</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">EANX36</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">EANX40</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Enriched</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Trimex</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Rebreather</label>
                            </div>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Oxygen">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Nitrogen">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Helium">
                        </div>                   
                    </div>
                    <div class="row justify-content-left">
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Cylinder Pressure</h6></label>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="How much did you start with?">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="How much was remaining?">
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Amount Used">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Additional</h6></label>
                            <div class="form-text">What other gear did you wear?</div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Hood</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Gloves</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Boots</label>
                            </div>
                        </div>                   
                    </div>
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
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Amazing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Good</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Average</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="examplecheckboxs" id="examplecheckboxs1" value="option1" >
                                <label class="form-check-label" for="examplecheckboxs1">Poor</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Note</h6></label>
                            <textarea class="form-control" placeholder="Write down your memories of this dive?" id="floatingTextarea2" style="height: 100px"></textarea>                         
                        </div>
                        
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Buddy</h6><label>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="Who did you go with?">
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <label class="form-label"><h6>Dive Center</h6></label>
                            <input type="text" class="form-control mb-2" id="diveTitle" placeholder="What dive center did you dive with?">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div> 
                    </div>
                </div>
            </div>
        </form>
        <!-- Bootstrap Javascript Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>


