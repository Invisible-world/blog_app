@extends('layouts.app')
@section('content')
<div class=" text-center text-white">
    <div class="container pb-5 heroContainer ">
    <div class="row pb-5 heroText">
    <div class="mx-auto col-lg-10 text-dark">
      <h1 class="display-4 mb-4 ">  Sameer Pokharel   </h1>
      <p class="lead mb-5">I'm a self-taught frontend developer currently practicing web development..<br/>
        I choose Javascript as my first programming language and have developed front end applications using React JS components. 
        Meanwhile,I'm developing a blog application where i can zot down....
        :)<br/>
        #Learning@NodeJS,@Laravel
    </p> <a href={{route('blogs')}} class="btn btn-lg btn-outline-dark mx-1">Read blogs</a> 
    </div>
    </div>
    </div>
    </div>
@endsection