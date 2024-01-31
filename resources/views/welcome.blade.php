<x-layout>
  <x-slot name="title">Welcome page -- Site overview </x-slot>
   <x-slot name="content">
    <div class="w3-row-padding w3-center w3-margin-top">
        <a href="{{ route("showMice") }}">
            <div class="w3-quarter">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h3>Mice</h3><br>
                    <i class="fa fa-gamepad w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Unbreakable</p>
                    <p>Macro keys</p>
                    <p>No delay</p>
                    <p>Wired and Wireless options</p>
                </div>
            </div>
        </a>
        
        <a href="{{ route("showKeyboards") }}">
            <div class="w3-quarter">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h3>Keyboards</h3><br>
                    <i class="fa fa-keyboard-o w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Custom switches</p>
                    <p>Macro keys</p>
                    <p>No delay</p>
                    <p>Wired and Wireless options</p>
                </div>
            </div>
        </a>

        <a href="{{ route("showMice") }}">
            <div class="w3-quarter">
                <div class="w3-card w3-container" style="min-height:460px">
                    <h3>Headsets</h3><br>
                    <i class="fa fa-headphones w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Noise canceling</p>
                    <p>Surround Sound </p>
                    <p>Comfortable materials</p>
                    <p>Wired and Wireless options</p>
                </div>
            </div>
        </a>
        
        <div class="w3-quarter">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>Bundles</h3><br>
                <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                <p>Brand new complete set up</p>
                <p>Fully customiseable mouse</p>
                <p>Keyboard with custom switches</p>
                <p>Best surroundsound headsets </p>
            </div>
        </div>
    </div>

<div class="w3-row-padding"> 
    
    <div class="w3-third">
        <div class="w3-card">
            <img src="/w3images/car.jpg" alt="Car" style="width:100%">
            <div class="w3-container">
                <p>w3-card</p>
            </div>
        </div>
    </div>
    
    <div class="w3-third">
        <div class="w3-card-4">
            <img src="/w3images/car.jpg" alt="Car" style="width:100%">
            <div class="w3-container">
                <p>w3-card-4</p>
  </div>
</div>
</div>

<div class="w3-third">
    <div class="w3-card-4">
        <img src="/w3images/car.jpg" alt="Car" style="width:100%">
        <div class="w3-container">
            <p>w3-card-4</p>
        </div>
    </div>
</div>
</div>
    

<h2 class="w3-center">Slideshows</h2>
<div class="w3-content" style="max-width:800px;position:relative">
    
    <img class="mySlides w3-animate-opacity" src="/w3images/snow.jpg" style="width:100%">
    <img class="mySlides w3-animate-opacity" src="/w3images/lights.jpg" style="width:100%">
    <img class="mySlides w3-animate-opacity" src="/w3images/mountains.jpg" style="width:100%">
    <img class="mySlides w3-animate-opacity" src="/w3images/forest.jpg" style="width:100%">
    
    <a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;left:0;" onclick="plusDivs(-1)">❮</a>
    <a class="w3-button w3-hover-dark-grey" style="position:absolute;top:45%;right:0;" onclick="plusDivs(+1)">❯</a>
</div>

<div class="w3-container">
    <hr>
    <h2 class="w3-center">Navigation</h2>
    
    <div class="w3-bar w3-theme">
        <a href="#" class="w3-bar-item w3-button w3-padding-16">Dashboard</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-16">Link 1</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button w3-padding-16">
                Dropdown <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 1</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 2</a>
                <a href="javascript:void(0)" class="w3-bar-item w3-button">Link 3</a>
            </div>
  </div>
</div>
  
<hr>
<h2 class="w3-center">Accordions</h2>
<button onclick="myAccFunc('Demo1')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 1</button>
<div id="Demo1" class="w3-hide">
    <div class="w3-container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 2</button>
<div id="Demo2" class="w3-hide">
    <a href="#" class="w3-button w3-block w3-left-align">Link 1</a>
    <a href="#" class="w3-button w3-block w3-left-align">Link 2</a>
    <a href="#" class="w3-button w3-block w3-left-align">Link 3</a>
</div>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 3</button>
<div id="Demo3" class="w3-hide w3-black">
    <div class="w3-container">
        <p>Accordion with Images:</p>
        <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
        <p>French Alps</p>
    </div>
</div>

<hr>
<h2 class="w3-center">Tabs</h2>
<div class="w3-border">
    <div class="w3-bar w3-theme">
        <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">London</button>
        <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Paris</button>
        <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Tokyo</button>
    </div>
    
    <div id="London" class="w3-container city w3-animate-opacity">
        <h2>London</h2>
        <p>London is the capital city of England.</p>
        <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    </div>
    
    <div id="Paris" class="w3-container city w3-animate-opacity">
        <h2>Paris</h2>
        <p>Paris is the capital of France.</p> 
        <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
    </div>
    
    <div id="Tokyo" class="w3-container city w3-animate-opacity">
        <h2>Tokyo</h2>
        <p>Tokyo is the capital of Japan.</p>
        <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
    </div>
</div>

<hr>
<h2 class="w3-center">Buttons</h2>
<div class="w3-center">
    <br>
    <a class="w3-button w3-theme">Button</a>
    <a class="w3-button w3-theme">Button</a>
    <a class="w3-button w3-theme-d3 w3-disabled">Button</a>
    <br><br>
    <a class="w3-button w3-circle w3-large w3-black"><i class="fa fa-plus"></i></a>
    <a class="w3-button w3-circle w3-large w3-theme"><i class="fa fa-plus"></i></a>  
    <a class="w3-button w3-circle w3-large w3-card-4"><i class="fa fa-plus"></i></a>
</div>
<br>
<div class="w3-center">
    <div class="w3-dropdown-hover">
        <button class="w3-button w3-theme">Dropdown <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>
    </div>
</div>

</div>

<hr>
<div class="w3-center">
    <h2>Pagination</h2>
    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">«</a>
            <a href="#" class="w3-bar-item w3-button w3-theme w3-hover-theme">1</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">2</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">3</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">4</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">5</a>
            <a href="#" class="w3-bar-item w3-button w3-hover-theme">»</a>
        </div>
    </div>
</div>
<br>
  </x-slot>
</x-layout>