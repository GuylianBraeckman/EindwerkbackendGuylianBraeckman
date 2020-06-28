@extends('layouts.front')
@section('title')
    DASHBOARD
@endsection
@section('content')

    <div class="titeltjeblogs mb-5">
        <div class="container">
            <h1 class="text-white">Blogs</h1>
        </div>
    </div>
    <section class="details-card">

        <div class="container-fluid">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 px-lg-1 pb-1 d-flex">
                        <div class="card w-100">
                            <img class="imgcategory" src="{{$blog->photo ? asset ($blog->photo->file): 'http://placehold.it/62x62'}}"/>
                            <div class="card-body d-flex flex-column">
                                <h3>{{$blog->title}}</h3>
                                <p>{{Str::limit($blog->content, 100, ' (...)')
                            }}</p>
                                <a href="{{route('single_post', $blog->id)}}" class="btn-card w-50 mx-auto text-center">Read More</a>
                                <div class="mx-auto fb-share-button" data-href="http://eindwerkbackend.test/blog" data-layout="button"
                                     data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer
                             .php?u=http%3A%2F%2Feindwerkbackend.test%2Fblog&amp;src=sdkpreparse"
                                                          class="fb-xfbml-parse-ignore">Share</a>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            </div>

        </div>


    </section>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v7.0"
            nonce="RRvXeDf7"></script>
@endsection
