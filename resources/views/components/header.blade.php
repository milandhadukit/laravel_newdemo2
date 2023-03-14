{{-- <div> 
    <h1> {{$title}}'sHeader Component </h1> 
    <h1> {{$name}} </h1> 
    </div> --}}


    @foreach($fruits as $fruit) 
    <p>{{$fruit}}</p> 
@endforeach