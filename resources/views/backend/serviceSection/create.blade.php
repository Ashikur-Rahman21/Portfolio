@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Create Service Section Info</h3>
            <form method="POST" action="{{ route('service-section.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        placeholder="Enter your institute name">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <label for="short_des">Short Description</label>
                    <textarea class="form-control rounded" id="short_des" name="short_des" rows="4" placeholder="Enter your short description"></textarea>
                    @error('short_des')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="long_des">Long Description</label>
                    <textarea class="form-control rounded" id="long_des" name="long_des" rows="6" placeholder="Enter your long description"></textarea>
                    @error('long_des')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="text-center">
                    <a href="{{ route('service-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
