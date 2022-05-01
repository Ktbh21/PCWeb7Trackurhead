@extends('layouts.app')
@section('title')
    Recent Attacks

@endsection
@section('content')


<div class= "row-12 parentcircle">
        <div class="col-12 circlecount ">
           <h3>Hi @ {{ $user->name }}</h3>
           <span><strong>{{ $headachecount }}</strong> Attacks currently</span>
           <BR></BR>
           </div>
    </div>

<div class="container testdiv">

    <div class="row pt-6 ">
            @foreach($entry as $e)
            
            <div class="col-6 mb-5 hider s1">
            <div class="pt-3 p1" >
                <h5>Date of Attack </h5>
                <p><strong>{{$e->date}}</strong></p>
 
            </div>
           <div class="pt-3 p1">
           <h5>duration of Attack </h5>
                <p><strong>{{$e->headacheduration}} minutes</strong></p>
           </div>

           <div class="pt-3 p1">
           <h5>Sleep duration </h5>
           <p><strong>{{$e->sleepduration}} minutes</strong></p>
           </div>

           <div class="pt-3 p1">
           <h5>Pain region </h5>
           <p><strong>{{$e->painregion}}</strong></p>
           </div>
             
           <div class="pt-3 p1">
           <a href="entry{{$e->id}}"><span class="btn btn-light testdiv">Details</span></a>
           </div>



            </div>
            



        @endforeach
        </div>
        </div>




@endsection



