<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Timber Track</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <!-- Styles -->
        <style>
          *{
    font-family: 'Scope One', serif;
}
body, html{
    height: 100%;
    margin: 0;
    color: white;
}
body{
     background-image: url(
	https://i.pinimg.com/originals/51/95/eb/5195ebb8c5f9772deda82aa2937134d3.jpg
        );
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed;
}
#container{
    position: static;
    background-color: rgba(0, 0, 0, .4);
    height: 100%;
    width: 100%;
    margin-top: 0%;
    padding-top: 0%;
}

/*Main*/
.vl {
    border-left: 3px solid black;
    height: 500px;
    position:absolute;
    margin-left: 56%;
    margin-top: 6%;
    
}
#main{
    margin-left: 7%;
    margin-top: 11%;
    width: 50%;
    position:absolute;
}


/*button*/

.cta {
    position: absolute;
    margin-left: 10%;
    margin-top: 18%;
    padding: 19px 22px;
    transition: all 0.2s ease;
    cursor: pointer;
  }
  .cta:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 28px;
    background: rgba(255, 255, 255, 0.5);
    width: 56px;
    height: 56px;
    transition: all 0.3s ease;
  }
  .cta span {
    position: relative;
    font-size: 16px;
    line-height: 18px;
    font-weight: 900;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    vertical-align: middle;
  }
  .cta svg {
    position: relative;
    top: 0;
    margin-left: 10px;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke: #111;
    stroke-width: 2;
    transform: translateX(-5px);
    transition: all 0.3s ease;
  }
  .cta:hover:before {
    width: 100%;
    background: rgba(255, 255, 255, 0.5);
  }
  .cta:hover svg {
    transform: translateX(0);
  }
  .cta:active {
    transform: scale(0.96);
  }
  

/*Animation*/
.fade-out {
    animation: fadeIn ease 3s;
    -webkit-animation: fadeIn ease 3s;
    -moz-animation: fadeIn ease 3s;
    -o-animation: fadeIn ease 3s;
    -ms-animation: fadeIn ease 3s;
    }
    @keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateX(30px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
    }

    @-moz-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-webkit-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-o-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-ms-keyframes fadeIn {
    0% {opacity:0;}
    100% {opacity:1;}
    }
    
.fade-in1 {
    animation: fade ease 3s;
    -webkit-animation: fade ease 3s;
    -moz-animation: fade ease 3s;
    -o-animation: fade ease 3s;
    -ms-animation: fade ease 3s;
    }
    @keyframes fade {
    0% {
        opacity: 0;
        transform: translateX(-20px);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
    }

    @-moz-keyframes fade {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-webkit-keyframes fade {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-o-keyframes fade {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-ms-keyframes fade {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    
.fade-in {
    animation: fadet ease 3s;
    -webkit-animation: fadet ease 3s;
    -moz-animation: fadet ease 3s;
    -o-animation: fadet ease 3s;
    -ms-animation: fadet ease 3s;
    }
    @keyframes fadet {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
    }

    @-moz-keyframes fadet {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-webkit-keyframes fadet {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-o-keyframes fadet {
    0% {opacity:0;}
    100% {opacity:1;}
    }

    @-ms-keyframes fadet {
    0% {opacity:0;}
    100% {opacity:1;}
    }

/* Log IN */

.login {
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 150px auto;
}
.login h1 {

    text-align: center;
    color: #5b6574;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #dee0e4;
}
.login form {

    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}
.login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: black;
    color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"], .login form input[type="number"] {
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
}
.login form input[type="submit"] {
    width: 100%;
    padding: 15px;
margin-top: 20px;
    background-color: gray;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
background-color: black;
    transition: background-color 0.2s;
}
#back{
    position: fixed;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
    display: none;
}
/*Close*/
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

div.pullUp a:before {
    position: absolute;
    width: 100%;
    height: 2px;
    left: 0px;
    bottom: 0px;
    content: "";
    background: #fff;
    opacity: 0.3;
    transition: all 0.3s;
  }
  
  div.pullUp a:hover:before {
    height: 100%;
  }
  
div.container1 {
    font-family: Raleway;
    margin: 0 auto;
  
    text-align: center;
  }
  
  div.container1 a {
    color: #fff;
    text-decoration: none;
    font: 20px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
  }
  
        </style>
    </head>
    <body>
       <div id="container">
            <br>
            <center>
                <div class="container1 pullUp">
                    <a href="index.php"> HOME</a>
                    <a href="About.php"> ABOUT</a>
                    <a href="Contact.html"> CONTACT</a>
                  </div>
            @yield('body')
        
        </div>
            
    </body>
</html>
