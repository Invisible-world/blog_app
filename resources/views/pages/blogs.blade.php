@extends('layouts.app')
@section('content')
<div class=" text-center text-dark">
   <div class="container pb-5 heroContainer ">
      <div class="row pb-5 heroText">
         @foreach($blogs as $key => $blog)
         <div class="col-6">
            <div class="card pt-2">
               <div class="card-title">
                  <h6 class="card-title">Title:{{$blog->title}}</h6>
                  <p class="lead">Author:{{$blog->author}}</h6>
               </div>
               <div class="card-body">
                  <h6 class="lead">{{$blog->description}}</h6>
               </div>
               <div class="card-footer">
                  <h6 class="lead">Status:{{$blog->published ? 'Publsihed':'Not Published'}}</h6>

               </div>
            </div>
         </div>

         @endforeach

      </div>
   </div>
</div>
@endsection