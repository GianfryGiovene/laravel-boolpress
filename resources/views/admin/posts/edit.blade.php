@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container">
                        <div class="card-header row justify-content-between">
                            <div>Create new Post</div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row flex-column">
                                    <div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <form action="{{ route('admin.posts.update', $post->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        {{-- category --}}
                                        <div class="row">
                                            <div class="flex-column col-6">
                                                <label for="category">Categoria: </label>
                                                <select name="category_id"
                                                    class="form-control @error('title') is-invalid @enderror col-7">
                                                    <option value="category_id">--Select Cateogory</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $category->id == old('category_id') ? 'selected' : ' ' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {{-- tags --}}
                                            <div class="flex-column">
                                                <label for="tags">Tags: </label>
                                                @foreach ($tags as $tag)
                                                    <div class="row align-items-center">
                                                        <input type="checkbox" value="{{ $tag->id }}" name="tags[]"
                                                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }} />
                                                        <div class="form-check-label">{{ $tag->name }}</div>
                                                    </div>
                                                @endforeach
                                                @error('tags')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- title --}}
                                        <div class="row flex-column">
                                            <label for="title">Titolo: </label>
                                            <input class="form-control @error('title') is-invalid @enderror" type="text"
                                                name="title" value="{{ $post->title }}" />
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- content --}}
                                        <div class="row flex-column mt-2">
                                            <label for="content">Contenuto: </label>
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $post->content }}"></textarea>
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- image upload --}}
                                        <div class="mt-2">
                                            <label for="image_cover">Immagine di Copertina</label>
                                            <input type="file" name="image_cover" />
                                        </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-success" type="submit">Edit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
