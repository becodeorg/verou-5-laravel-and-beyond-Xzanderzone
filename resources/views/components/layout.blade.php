<!DOCTYPE html>
<html>
    <head>
        <title>LEFT FOR DEAD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
    
    <!-- Side Navigation -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
        <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
        <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
        <a href="/" class="w3-bar-item w3-button">Home Page</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Mice</a>
        <a href="{{ route("showKeyboards") }}" class="w3-bar-item w3-button">Keyboards</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Headsets</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Bundles</a>
        <a href="{{ route("register") }}" class="w3-bar-item w3-button">create Account</a>
        <a href="{{ route("dashboard") }}" class="w3-bar-item w3-button">Log In</a>
    </nav>
    
            {{-- @include('layouts.navigation') --}}
    
    <!-- Header -->
    <header class="w3-container w3-theme w3-padding" id="myHeader">
        <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
        <div class="w3-center">
            <h1 class="w3-xxxlarge fa fa-ambulance"> Left For Dead</h1>
            <h3 class="w3-xxlarge w3-animate-bottom">THE <s>RIGHT</s> LEFT WAY TO GO</h3>
            <div class="w3-padding-32">
                <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey" onclick="document.getElementById('infoModal').style.display='block'" style="font-weight:900;">WHO ARE WE</button>
            </div>
        </div>
    </header>
    
    <!-- Modal -->
    <div id="infoModal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-theme-l1"> 
                <span onclick="document.getElementById('infoModal').style.display='none'"
                class="w3-button w3-display-topright">×</span>
                <h4>Standing up for the lefties globally!</h4>
                <h5>Because we must </i></h5>
            </header>
            <div class="w3-padding">
                <p>Durable,High-quality and affordable mice and gear</p>
                <p>With options reaching from our hardcore gamers to our casual office use</p>
                <p>We got you covered!</p>
            </div>
            <footer class="w3-container w3-theme-l1">
                <p>LFD Left For Dead - Xzanderzone </p>
            </footer>
        </div>
    </div>
    
  <main>
  <h1 class="w3-container w3-center">{{$title}}</h1>
    <p>{{$content}}</p>
  </main>

    <!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
    <h3>Left For Dead -- 2024</h3>       
     <a href="/" class="w3-bar-item w3-button">Home Page</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Mice</a>
        <a href="{{ route("showKeyboards") }}" class="w3-bar-item w3-button">Keyboards</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Headsets</a>
        <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Bundles</a>
        <a href="{{ route("register") }}" class="w3-bar-item w3-button">create Account</a>
        <a href="{{ route("dashboard") }}" class="w3-bar-item w3-button">Log In</a>
    <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
        <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
        <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
            <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>
    
    <!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
    <script>
        // Side navigation
        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "100%";
            x.style.fontSize = "30px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
        
        // Tabs
        function openCity(evt, cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            var activebtn = document.getElementsByClassName("testbtn");
            for (i = 0; i < x.length; i++) {
                activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-dark-grey";
        }
        
        var mybtn = document.getElementsByClassName("testbtn")[0];
        mybtn.click();
        
        // Accordions
        function myAccFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }
        
        // Slideshows
        var slideIndex = 1;
        
        function plusDivs(n) {
            slideIndex = slideIndex + n;
            showDivs(slideIndex);
        }
        
        function showDivs(n) {
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length} ;
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
        }
        
        showDivs(1);
        
        // Progress Bars
        function move() {
            var elem = document.getElementById("myBar");   
            var width = 5;
            var id = setInterval(frame, 10);
            function frame() {
                if (width == 100) {
                    clearInterval(id);
                } else {
                    width++; 
                    elem.style.width = width + '%'; 
                    elem.innerHTML = width * 1  + '%';
                }
            }
        }
    </script>

</body>
</html>