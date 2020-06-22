@extends('layouts.front')
@section('title')
    DASHBOARD
@endsection
@section('content')

{{--<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">

            <h1 class="my-4">News
                <small>Secondary Text</small>
            </h1>

            <!-- Blog Post -->
          @foreach($blogs as $blog)
            <div class="card mb-4">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title">{{$blog->title}}</h1>
                    <p class="card-text"> {{$blog->content}}</p>
                    <a href="#" class="btn btn-primary">Read More →</a>
                </div>
                <div class="card-footer text-muted">
{{$blog->updated_at}}                    <a href="#">Start Bootstrap</a>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
    --}}


<div class="titeltjeblogs mb-5">
    <div class="container">
        <h1 class="text-white">Blogs</h1>
    </div>
</div>
<section class="details-card">

    <div class="container">

        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-12 col-lg-4">
                <div class="card-content mb-2">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                    </div>
                    <div class="card-desc">
                        <h3>{{$blog->title}}</h3>
                        <p>{{Str::limit($blog->content, 100, ' (...)')
                            }}</p>
                      <a href="{{route('single_post', $blog->id)}}" class="btn-card">Read More</a>
                        <div class="mx-auto fb-share-button" data-href="http://eindwerkbackend.test/blog" data-layout="button"
                             data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer
                             .php?u=http%3A%2F%2Feindwerkbackend.test%2Fblog&amp;src=sdkpreparse"
                                                  class="fb-xfbml-parse-ignore">Share</a></div>
                    </div>
                </div>
            </div>

                @endforeach

        </div>
    </div>
</section>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v7.0" nonce="RRvXeDf7"></script>
@endsection
