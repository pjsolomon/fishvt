<!DOCTYPE HTML>
<HTML lang="en">

    <head>
        <title>Fish VT</title>
        <meta charset="utf-8">
        <meta name="author" content="UVM CS Crew">
        <meta name="description" content="HackVT">
        <link rel="icon" type="image/png" href="images/Pufferfish.png">
        <link rel="stylesheet" href="final.css" type="text/css" media="screen">
    </head>

    <body>   
    <?php include ("nav.php"); ?>
    <br><br>
    
    <!--Get and display user location -->
    
    <div id="rectangle">
        
    <p id="demo"></p>
    <?php include ("geolocation.php");?> 
    <button onclick="getLocation()" class="centered">Find my location</button>
    
   </div>
</body>
</html>