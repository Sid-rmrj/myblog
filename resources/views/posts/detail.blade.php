@extends('layouts.master')
@section('content')
<div class="container-fluid ">
       
        <div class="row">
            <div class="col-lg-8">
              <h1 class="mb-4">{{$post->title}}</h1>
              <p class="text-muted">Posted on {{$post->created_at->format('M d,Y')}}</p>
              <img src="{{$post->image_url}}" class="img-fluid mb-4" alt="Blog Image">
              <p>{{$post->content}}</p>
            </div>
            <div class="col-lg-4">
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Related Posts</h5>
                  <ul class="list-unstyled">
                    <li><a href="./detail.html">Post 1</a></li>
                    <li><a href="./detail.html">Post 2</a></li>
                    <li><a href="./detail.html">Post 3</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
</div>
@endsection