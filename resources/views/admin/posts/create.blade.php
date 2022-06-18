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
                                <div class="row flex-column">
                                    <form action="{{ route('admin.posts.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
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
                                                <div class="row align-items-center">
                                                    @foreach ($tags as $tag)
                                                        <input type="checkbox" value="{{ $tag->id }}" name="tags[]"
                                                            class=" ml-2"
                                                            {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }} />
                                                        <div class="form-check-label ml-1">{{ $tag->name }}</div>
                                                    @endforeach
                                                </div>
                                                @error('tags')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- title --}}
                                        <div class="row flex-column">
                                            <label for="title">Titolo: </label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror" required
                                                value="{{ old('title') }}" />
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- content --}}
                                        <div class="row flex-column mt-2">
                                            <label for="content">Contenuto: </label>
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" required>
                                                {{ old('content') }}
                                            </textarea>
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
                                    <button class="btn btn-success" type="submit">Create</button>
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
