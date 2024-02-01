<x-layout>
  <x-slot name="title">LFD Keyboards </x-slot>
   <x-slot name="content">
       <div class="w3-dropdown-hover">
           <button class="w3-button w3-padding-16">
               Sort by <i class="fa fa-caret-down"></i>
           </button>
           <div class="w3-dropdown-content w3-card-4 w3-bar-block">
               <a href="{{route("showKeyboardsSorted",['type'=>'vote'])}}" class="w3-bar-item w3-button">popular</a>
               <a href="{{route("showKeyboardsSorted",['type'=>'price'])}}" class="w3-bar-item w3-button">price</a>
               <a href="{{route("showKeyboardsSorted",['type'=>'created_at'])}}" class="w3-bar-item w3-button">newest</a>
           </div>
       </div>
    <div class="w3-row-padding w3-center w3-margin-top">
        @foreach($keyboards as $keyboard)
        <div class="w3-third">
            <a href="{{ route("showKeyboard", ["keyboard" => $keyboard]) }}">
            <div class="w3-card w3-container w3-hover-gray" style="min-height:460px">
                <h3>{{$keyboard->name}}</h3><br>
                {{-- <i class="fa fa-gamepad w3-margin-bottom w3-text-theme " style="font-size:120px"></i> --}}
                {{-- replace dummy info --}}
                <img src="{{$keyboard->image}}" alt="{{$keyboard->name}}" width="180" height="120">
                <p>Unbreakable</p>
                <p>Macro keys</p>
                <p>No delay</p>
                <p>Wired and Wireless options</p>
                <br>
                <p><b>Price: </b>{{$keyboard->price}} €</p>
                <br>
            </div>
        </a>
        </div>
        @endforeach
        
  </x-slot>
</x-layout>