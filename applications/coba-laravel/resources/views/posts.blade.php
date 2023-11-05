@extends('layouts.main')

@section('container')
   
   <h1>Halaman Blog Posts</h1>

   @foreach ($posts as $posts)
   <article class="mb-5" border-bottom pb-4>
        <h2>
            <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">{{ $posts->title }}</a>
        </h2>
       <p>By. Risma Rahmana in <a href="/categories/{{ $posts->category->slug }}">{{
            $posts->category->name }}</a></p>
       <!-- <h5>By : {{ $posts["author"] }}</h5> -->
       <p>{{ $posts->excerpt }}</p>
       <a href="/posts/{{ $posts->slug }}" class="text-decoration-none">Read more..</a>
   </article>   
   @endforeach

@endsection