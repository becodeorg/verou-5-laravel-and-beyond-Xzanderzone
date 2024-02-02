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
            <div>
                <h3>Comments </h3>
                @foreach ($posts as $post)
                <h4>{{$post->title}}</h4>
                <p>{{$post->content}}</p>
                @endforeach
            </div>

            {{-- write a new comment with a title ,content in the mice category with mouse id--}}
            {{-- {{PostController::create("title","content","mice",$mouse->id)}} --}}

            {{-- include comments ??--}}
            {{-- {{PostController::index("mice",$mouse->id)}} --}}
        </div> 
  </x-slot>
</x-layout>