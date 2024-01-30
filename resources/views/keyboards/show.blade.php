<x-layout>
  <x-slot name="title">LFD Keyboards </x-slot>
   <x-slot name="content">
    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>{{$keyboard->name}}</h3><br>
                <img src="{{$keyboard->image}}" alt="{{$keyboard->name}}" width="560" height="420">
                {{-- <i class="fa fa-gamepad w3-margin-bottom w3-text-theme" style="font-size:120px"></i> --}}
                <p>Unbreakable</p>
                <p>Macro keys</p>
                <p>No delay</p>
                <p>Wired and Wireless options</p>
        <a href="{{ route("showKeyboards") }}" class="w3-bar-item w3-button">Back to overview</a>

            </div>
        </div>
  </x-slot>
</x-layout>