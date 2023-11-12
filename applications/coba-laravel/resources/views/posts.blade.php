@extends('layouts.main')

@section('container')
   
   <h1 class="mb-5">{{ $title }}</h1>

   @foreach ($posts as $posts)
   <article class="mb-5" border-bottom pb-4>
        <h2>
            <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">{{ $posts->title }}</a>
        </h2>
       <p>By. <a href="/authors/{{ $posts->author->username }} " class="text-decoration-none"> {{ $posts->author->name   }}</a> in <a href="/categories/{{ $posts->category->slug }}" 
       class="text-decoration-none">{{ $posts->category->name }}</a></p>
       <!-- <h5>By : {{ $posts["author"] }}</h5> -->
       <p>{{ $posts->excerpt }}</p>
       <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">Read more..</a>
   </article>   
   @endforeach

@endsection