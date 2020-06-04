 <doctype html>
    <html>
    <head>
         <!-- the meta tags -->
        <meta charset="utf-8">
        <meta name="author" content="Anis Saoudi">
        <meta name="description" content="Find Waether in any city">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-devuce-widht, initial-scale=1">
        <meta http-equiv="content-language" content="EN,AR" />
         <!-- the icon of the page -->
        <link rel="icon" href="imgs/icon.ico">
              <title>Find Weather</title>
        <!-- the link tags -->
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
              
              .container{
                background-image: url(bg.jpg);
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                padding-top:180px;
            }
            .center{
                text-align: center;
                align-items: center;
            }
            p{
                padding-bottom: 30px;
            }
            button{
                margin-top: 15px;
            }
            .search{
                
                border-radius: 25px 0 25px 0 ; 
                border-bottom: 5px solid #61656B;
            }
            
        </style>
    </head>
    <body>
        <!-- the page body -->
        <!-- form -->
      
    <div class="container center">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-12">
            
            <h1>WEATHER</h1>
              <p class="lead">Enter Your City Below :</p>
              <form>
              <div class="form-group ">
                  <input type="text" autocomplete="off" class="form-control search search-box" name="city" placeholder="Eg. London, Paris ...">
                  </div>
                 <button id="findWeatherForMe" class="btn btn-success btn-lg" onclick="findW()">Find My Wether</button> 
              
              </form>
            
             </div>
       </div>
         
           <div class="row">
             <?php
               error_reporting(0);
//get the city name

if(($_GET['city'])==false){$city='London';
           $city=str_replace(" ","",$city);
//get the city weather from the website
$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
//find the paragraph wish take just the weather
preg_match('/<span class="phrase">(.*?)</s',$contents,$matches);
//print the weather
                           echo "<br>";
                           echo '<span style="color:#28a745;
                font-size: 35px;
                font-weight: 900;
                margin:10px 0px;
                text-shadow: 5px 8px rgba(0,0,0,0.3);
                text-align:center;border-bottom: 5px solid #28a745;">'.$city.'</span>';
echo "<br>";

             echo '<span style="color:#fff;
                font-size: 20px;
                font-weight: 900;
                margin:10px 0px;
                text-shadow: 2px 8px rgba(0,0,0,0.4);border:solid 1px">'.$matches[1].'</span>';             
                          } 
               
               else{            
$city=$_GET['city'];
$city=str_replace(" ","",$city);
//get the city weather from the website
$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");
//find the paragraph wish take just the weather
preg_match('/<span class="phrase">(.*?)</s',$contents,$matches);
//print the weather
     echo "<br>";
                           echo '<span style="color:#28a745;
                font-size: 35px;
                font-weight: 900;
                margin:10px 0px;
                text-shadow: 2px 8px rgba(0,0,0,0.5);
                text-align:center;border-bottom: 5px solid #28a745;">'.$city.'</span>';
echo "<br>";

             echo '<span style="color:#fff;
                font-size: 20px;
                font-weight: 900;
                margin:10px 0px;
                text-shadow: 2px 8px rgba(0,0,0,0.4);border:solid 1px">'.$matches[1].'</span>';             
}

?>
           
           </div>
       
 </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
      <!-- js you need -->  
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        <!--.../js you need -->
        <script src="main.js"></script>
        
        </body>
    
    </html>