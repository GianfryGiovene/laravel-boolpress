@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container">
                        {{-- title --}}
                        <div class="card-header row justify-content-between">
                            <h2>{{ $post->title }}</h2>
                        </div>
                        <div class="card-body">
                            {{-- slug --}}
                            <div class="row">
                                <h5 class="mr-2">Slug: </h5>
                                <div>{{ $post->slug }}</div>
                            </div>
                            {{-- image --}}
                            <div class="col-12 border-bottom pb-2">
                                <img class="w-100" src="{{ asset('storage/' . $post->image_cover) }}" alt="">
                            </div>
                            {{-- content --}}
                            <div class="mt-2">
                                <p>{{ $post->content }}</p>
                            </div>

                            <div>
                                {{-- category --}}
                                <div class="row mr-4">
                                    <h6 class="mr-1">Category:</h6>
                                    <span>{{ $post->category->name }}</span>
                                </div>
                                {{-- tags --}}
                                <dd class="row">
                                    <h6 class="mr-1">Tags:</h6>
                                    @foreach ($post->tags as $tag)
                                        <span>{{ $tag->name }}</span>
                                        @if ($tag->id < count($post->tags))
                                            <span>-</span>
                                        @endif
                                    @endforeach
                                </dd>
                            </div>
                            <div class="row ">
                                <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                <div class="mx-2">
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">DELETE</button>
                                    </form>
                                </div>
                                <a class="btn btn-dark" href="{{ route('admin.posts.index') }}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
