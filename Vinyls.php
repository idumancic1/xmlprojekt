<html>
<head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">	
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="stilVinyls.css">
	<style>img[alt="www.000webhost.com"]{display:none};</style>
	<?php
		$xmldata = simplexml_load_file("albumi.xml") or die("Failed to load"); ?>
    <title>VinylDrop</title> </head>

<body>
    <div id="nav" class="container">
        <div class="row">
		    <div class="col-2">
                <a href="index.html">Home</a>
            </div>
            <div class="col-2">
                <a href="Vinyls.php">Vinyls & CDs</a>
            </div>
            <div class="col-2">
                <a href="about.html">About us</a>
            </div>
			
			<div class="col-6">
			<img id="logo" src="img/logo.png"></img>
                <h1 id="vinyl">VinylDrop</h1>
				
                </div>   
        
			
        </div>
    </div>
    <div></div>
    <main>  
        <div id="white">
            <br>
            <div class="container">
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6" >
                    <img src="img/caracal.png" id="1" alt="">
                    </div>
                        <div class="col-6">
                      <i>Album Name: </i> <b><?php echo $xmldata->album [0]-> name; ?></b>
                        <br>
                        <i id="Caracal">Artist: </i><b><?php echo $xmldata->album [0]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [0]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [0]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [0]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [0]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Caracal-2-LP-Disclosure/dp/B00YZONG08"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/xcx.jpg"  id="2" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [1]-> name; ?></b>
                        <br>
                        <i id="XCX">Artist: </i><b><?php echo $xmldata->album [1]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [1]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [1]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [1]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [1]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/how-feeling-now-Charli-XCX/dp/B088LLSJ4W"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div> 
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/ye.png"  id="3" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [2]-> name; ?></b>
                        <br>
                        <i id="YeKanye" >Artist: </i><b><?php echo $xmldata->album [2]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [2]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [2]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [2]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [2]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/ye-Kanye-West/dp/B07DQ43VD4"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/afterhoursdeluxe.jpg" name="afterhours"id="4" alt="">
                    </div>
                        <div class="col-6">
                            <i>Album Name: </i> <b><?php echo $xmldata->album [3]-> name; ?></b>
                        <br>
                        <i id="afterhours" >Artist: </i><b><?php echo $xmldata->album [3]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [3]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [3]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [3]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [3]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/After-Hours-Deluxe-Explicit-Weeknd/dp/B086Q4L9TB"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr> 
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/beztebe.jpg" id="5" alt="">
                    </div>
                        <div class="col-6">
                       <i>Album Name: </i> <b><?php echo $xmldata->album [4]-> name; ?></b>
                        <br>
                        <i id="beztebe">Artist: </i><b><?php echo $xmldata->album [4]-> artist; ?></b>
                        <br>
                        <i >Genres:</i> <b><?php echo $xmldata->album [4]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [4]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [4]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [4]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Bez-Tebe-Senidah/dp/B07Q2672SH"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div> 
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/nofuture.jpg" id="6" alt="">
                    </div>
                        <div class="col-6">
                            <i>Album Name: </i> <b><?php echo $xmldata->album [5]-> name; ?></b>
                        <br>
                        <i id="nofuture">Artist: </i><b><?php echo $xmldata->album [5]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [5]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [5]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [5]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [5]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/no-future-Explicit-EDEN/dp/B07Z79BRKW"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/dldt.png" id="6" alt="">
                    </div>
                        <div class="col-6">
                            <i>Album Name: </i> <b><?php echo $xmldata->album [6]-> name; ?></b>
                        <br>
                        <i id="drake">Artist: </i><b><?php echo $xmldata->album [6]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [6]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [6]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [6]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [6]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Dark-Lane-Demo-Tapes-Explicit/dp/B087YK9Q33"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/mercedescity.png" id="6" alt="">
                    </div>
                        <div class="col-6">
                            <i>Album Name: </i> <b><?php echo $xmldata->album [7]-> name; ?></b>
                        <br>
                        <i id="borebalboa">Artist: </i><b><?php echo $xmldata->album [7]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [7]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [7]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [7]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [7]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Mercedes-City/dp/B08D1VYWH7"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
                <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/plutobabypluto.png" id="9" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [8]-> name; ?></b>
                        <br>
                        <i id="pxbp">Artist: </i><b><?php echo $xmldata->album [8]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [8]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [8]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [8]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [8]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Pluto-x-Baby-Explicit/dp/B08NCFQXFP"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/motm3.png" id="10" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [9]-> name; ?></b>
                        <br>
                        <i id="kidcudi">Artist: </i><b><?php echo $xmldata->album [9]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [9]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [9]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [9]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [9]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Man-Moon-III-Chosen-Explicit/dp/B08PTM6F5J"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/bieber.jpeg" id="11" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [10]-> name; ?></b>
                        <br>
                        <i id="bieber">Artist: </i><b><?php echo $xmldata->album [10]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [10]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [10]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [10]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [10]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Justice-Justin-Bieber/dp/B08X6C6Z2G"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/savagemode2.png" id="12" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [11]-> name; ?></b>
                        <br>
                        <i id="savagemode2">Artist: </i><b><?php echo $xmldata->album [11]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [11]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [11]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [11]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [11]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/SAVAGE-Explicit-Savage-Metro-Boomin/dp/B08KHRLM8H"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/thewizrd.jpg" id="13" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [12]-> name; ?></b>
                        <br>
                        <i id="thewizrd">Artist: </i><b><?php echo $xmldata->album [12]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [12]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [12]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [12]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [12]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Future-Hndrxx-Presents-WIZRD/dp/B07MS59V8L"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/yeezus.jpg" id="14" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [13]-> name; ?></b>
                        <br>
                        <i id="yeezus">Artist: </i><b><?php echo $xmldata->album [13]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [13]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [13]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [13]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [13]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Yeezus-Explicit-Kanye-West/dp/B00CV5ZPA2"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/somuchfun.jpg" id="15" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [14]-> name; ?></b>
                        <br>
                        <i id="somuchfun">Artist: </i><b><?php echo $xmldata->album [14]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [14]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [14]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [14]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [14]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Much-Fun-Explicit-Young-Thug/dp/B07WK1J483"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/saveme.jpg" id="16" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [15]-> name; ?></b>
                        <br>
                        <i id="saveme">Artist: </i><b><?php echo $xmldata->album [15]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [15]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [15]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [15]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [15]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/SAVE-ME-Explicit-Future/dp/B07SKYNGS2"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
				 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/dontoliver.png" id="17" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [16]-> name; ?></b>
                        <br>
                        <i id="dontoliver">Artist: </i><b><?php echo $xmldata->album [16]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [16]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [16]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [16]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [16]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Heaven-Hell-Explicit-Don-Toliver/dp/B085R9VNDD"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
					 <div class="row justify-content-md-left">
                    <div class="col-6">
                    <img src="img/dbr.jpg" id="18" alt="">
                    </div>
                        <div class="col-6">
                        <i>Album Name: </i> <b><?php echo $xmldata->album [17]-> name; ?></b>
                        <br>
                        <i id="travis">Artist: </i><b><?php echo $xmldata->album [17]-> artist; ?></b>
                        <br>
                        <i>Genres:</i> <b><?php echo $xmldata->album [17]-> genre; ?></b>
                        <br>
                        <i>Year of release: </i><b> <?php echo $xmldata->album [17]-> year; ?></b>
                        <br><br><br>
                        <span><?php echo $xmldata->album [17]-> description; ?></span>
                        <br>
                        <br>
                        <i>Price:</i> <b><?php echo $xmldata->album [17]-> price; ?></b>
                        <br>
                        <br>
                        <a href="https://www.amazon.com/Days-Before-Rodeo-Prayer-Explicit/dp/B083598DYJ"><button type="button" class="btn btn-primary">BUY</button></a>
                        <br>
                        </div>
                </div>
                <hr>
         
    </main>
    
    <hr>
    <footer>
        <p class="pod">© Ivan Dumančić 2021</p>
	</footer>
</body>

</html>