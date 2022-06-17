@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container">
                        <div class="card-header row justify-content-between">
                            <div>{{ __('Posts') }}</div>
                            <div><a href="{{ route('admin.posts.create') }}">Create new post</a></div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Edit</th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td><a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
                                        </td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span>{{ $tag->name }}</span>
                                                @if ($tag->id < count($post->tags))
                                                    <span>-</span>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="row">
                                                <a class="btn btn-success mr-2"
                                                    href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>

                                                <div>
                                                    <form action="{{ route('admin.posts.destroy', $post->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">DELETE</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <a href="/admin">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
