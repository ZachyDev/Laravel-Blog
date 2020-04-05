<!-- inherit from layouts/master.blade.php -->
@extends('layouts.master')
<!-- innsert the content to the page -->
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="bg-primary">Laravel Blog</h1>
       <a href="https://laravel.com/" target="_blank">{{ 'Laravel Documentation' }}</a> 
       <!-- {!! "<script>alert('hello user')</script>" !!} -->
    </div>
</div>
@endsection

      
@section('services')
    <!-- This is the services page -->
  <div class="row">
    <div class="col-12 bg-success offset-sm-0 rounded">
        <!-- this is the conditional statement -->
        @if(true)
            <h1>Services</h1>
            <p>{!! '<strong>A list of services</strong>' !!}</p>
        @else
            <h1>False</h1>
        @endif

        <!-- forloop -->

        @for($i = 0; $i < 5; $i++)
            <p>{{ $i + 1 }} . iteration</p>
        @endfor
    </div>
  </div>
@endsection

@section('footer')
<h1 class="text-center">{{ 'Testimonial' }} </h1>
 <div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="card border-primary">
            {!! 'Moseti Zachary' !!}
            <div class="card-body">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Inventore itaque minima dolorum illo magni iure eaque. Et, est assumenda magni dolorem odit ut rem, quae nostrum, quaerat cumque vitae architecto.
            </p>
            </div>
        </div>
    </div>
    <!-- card2 -->
    <div class="col-md-12 col-lg-4">
        <div class="card border-primary">
            {!! 'Moseti' !!}
            <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Ut sapiente nam dolore iste quaerat ullam ipsa! Natus sapiente pariatur quos fugit, odit optio sit laudantium quod libero? Dolor, nihil iste.</p>
            </div>
        </div>
    </div>
    <!-- card-3 -->
    <div class="col-md-12 col-lg-4">
        <div class="card border-primary">
            {!! 'Moseti' !!}
            <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Error, reprehenderit voluptas provident nesciunt ipsa repudiandae beatae ipsam incidunt unde aut velit praesentium modi magni neque nemo, rerum, deserunt facere? Dignissimos!</p>
            </div>
        </div>
    </div>
 </div>
@endsection