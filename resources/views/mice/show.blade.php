<x-layout>
    <x-slot name="title">LFD Mice </x-slot>
    <x-slot name="content">
    <div class="w3-row-padding w3-center w3-margin-top">
        <div class="">
            <div class="w3-card w3-container" style="min-height:460px">
                <h3>{{$mouse->name}}</h3><br>
                {{-- <i class="fa fa-gamepad w3-margin-bottom w3-text-theme" style="font-size:120px"></i> --}}
                <img src="{{$mouse->image}}" alt="{{$mouse->name}}" width="250" height="250">
                <p>Unbreakable</p>
                <p>Macro keys</p>
                <p>No delay</p>
                <p>Wired and Wireless options</p>
                <br>
                <p><b>Price: </b>{{$mouse->price}} €</p>
                <br>
                <a href="{{ route("showMice") }}" class="w3-bar-item w3-button">Back to overview</a>
            </div>
            <div class="w3-card w3-center w3-container w3-row-padding w3-center w3-margin-top" style="max-width:600px">
                <h3>Comments </h3>
                @foreach ($posts as $post)
            <div class="w3-card w3-container">
                <h4><b><u>{{$post->title}}</u></b></h4>
                <p>{{$post->content}}</p>
            </div>
            <br>
            @endforeach
        </div>
    </div> 
</x-slot>
</x-layout>