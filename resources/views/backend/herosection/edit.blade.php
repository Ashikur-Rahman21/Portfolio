@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Edit Hero Section Info</h3>
            <form method="POST" action="{{ route('hero-section.update', $heroSection->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" value="{{ old('name', $heroSection->name) }}">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control rounded-pill" id="title" name="title" value="{{ old('title', $heroSection->title) }}">
                    @error('title')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description">Short Description</label>
                            <textarea class="form-control rounded" id="description" name="description" rows="3">{{ old('description', $heroSection->description)}}</textarea>
                    @error('description')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="text-center">
                    <a href="{{ route('hero-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
