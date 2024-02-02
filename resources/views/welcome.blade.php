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

        <a href="{{ route("showHeadsets") }}">
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

<h2 class="w3-center">bundle idea?  Accordion</h2>
<button onclick="myAccFunc('Demo3')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align">Open Section 3</button>
<div id="Demo3" class="w3-hide w3-black">
    <div class="w3-container">
        <p>Accordion with Images:</p>
        <img src="img_snowtops.jpg" style="width:30%;" class="w3-animate-zoom">
        <p>French Alps</p>
    </div>
</div>
<hr>
</div>
  </x-slot>
</x-layout>