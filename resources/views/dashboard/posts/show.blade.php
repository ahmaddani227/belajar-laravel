@extends('dashboard.layouts.main')

@section('content')
    <div class="container mt-3">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to my all post
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white">
                    <span data-feather="edit" class="align-text-bottom"></span> Edit
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')

                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">
                        <span data-feather="x-circle" class="align-text-bottom"></span> Delete
                    </button>
                </form>

                @if ($post->image)
                    <div class="post-image">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-3"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!} {{-- tidak melakukan escaping --}}
                </article>
            </div>
        </div>
    </div>
@endsection
