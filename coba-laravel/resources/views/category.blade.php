{{-- UDAH GA KEPAKAI LAGI  KETIKA HALAMAN UDAH JADI "POST BY CATEGORY & POST BY AUTHOR" --}}

{{-- @extends('layouts.main')

@section('container')

    <h1>Post Category : {{ $category }}</h1>
    <article class="mb-5"></article>

@foreach ($posts as $post)

    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{  $post->title }}</a></h2>
        <h5>{{  $post["author"] }}</h5>
        <p>{{  $post->excerpt }}</p>
    </article>
    @endforeach

@endsection --}}

