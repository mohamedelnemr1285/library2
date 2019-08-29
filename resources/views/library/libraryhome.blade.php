@extends('library.home')
@section('contant')
  <!DOCTYPE html>
<head>
    <link href="{{ asset('css/library.css') }}" rel="stylesheet">
    <link rel = "stylesheet" href= "{{ asset('css/fontawesome.min.css')}}" type="text/css">
</head>

<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img width=100% height="550" src="image\Bedtime Math.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width=100% height="550" src="image\One Spooky Night.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width=100% height="550" src="image\GREAT Science Books for Kids.jpg" class="d-block w-100" alt="...">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>



    {{--{{$libraryes->links()}}--}}
@foreach($libraryes as $library)
    <div class="container">
        <div class="border border-success row">

          <div class="justify-content-center col-md-6">
           <img width="350" height="450" src="image/{{ $library->image}}">
           </div>

            <div class="info col-md-5 align-self-center">
             <i class="fa fa-lock"></i>
               <h5 class="title"><span>Title : </span>{{ ucwords($library->title)}} </h5>
                <h5 class="title"><span>Author : </span> {{ucwords($library->author) }} </h5>
                {{--<a  href="{{route('borrow',$id)}}" class=" btn btn-primary ">Borrow </a>--}}
                 <a  href="{{asset('image'.$library->image)}}" class=" btn btn-info">download</a>

            </div>

    </div>
    </div>
    </div>

    @endforeach


@endsection