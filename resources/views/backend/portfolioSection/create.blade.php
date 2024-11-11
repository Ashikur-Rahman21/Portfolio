@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Create Portfolio Section Info</h3>
            <form method="POST" action="{{ route('portfolio-section.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        placeholder="Enter project name">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
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
                 <div class="form-group mb-3">
                    <label for="url">URL</label>
                    <input type="text" class="form-control rounded-pill" id="url" name="url"
                        placeholder="Enter project url">
                    <div>
                        @error('url')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('portfolio-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
