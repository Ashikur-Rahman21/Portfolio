@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Create About Section Info</h3>
            <form method="POST" action="{{ route('about-section.update', $aboutSection->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        value="{{ old('name', $aboutSection->name) }}">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email"
                        value="{{ old('email', $aboutSection->email) }}">
                    @error('email')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control rounded-pill" id="phone" name="phone"
                        value="{{ old('phone', $aboutSection->phone) }}">
                    @error('phone')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="facebook">Facebook Link</label>
                    <input type="text" class="form-control rounded-pill" id="facebook" name="facebook"
                        value="{{ old('facebook', $aboutSection->facebook) }}">
                    @error('facebook')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="twitter">Twitter Link</label>
                    <input type="text" class="form-control rounded-pill" id="twitter" name="twitter"
                        value="{{ old('twitter', $aboutSection->twitter) }}">
                    @error('twitter')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="linkedin">Linkedin Link</label>
                    <input type="text" class="form-control rounded-pill" id="linkedin" name="linkedin"
                        value="{{ old('linkedin', $aboutSection->linkedin) }}">
                    @error('linkedin')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="github">Github Link</label>
                    <input type="text" class="form-control rounded-pill" id="github" name="github"
                        value="{{ old('github', $aboutSection->github) }}">
                    @error('github')
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
                <div class="form-group mb-3">
                    <label for="about_me">About Me</label>
                    <textarea class="form-control rounded" id="about_me" name="about_me" rows="4">{{ old('about_me', $aboutSection->about_me) }}</textarea>
                    @error('about_me')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="history">My History</label>
                    <textarea class="form-control rounded" id="history" name="history" rows="6">{{ old('history', $aboutSection->history) }}</textarea>
                    @error('history')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="text-center">
                    <a href="{{ route('about-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
