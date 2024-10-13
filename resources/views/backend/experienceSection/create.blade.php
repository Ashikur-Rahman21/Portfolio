@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Create Skill Section Info</h3>
            <form method="POST" action="{{ route('experience-section.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        placeholder="Enter company name">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control rounded-pill" id="address" name="address"
                        placeholder="Enter company address">
                    @error('address')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input type="text" class="form-control rounded-pill" id="year" name="year"
                        placeholder="Enter your year">
                    @error('year')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="text-center">
                    <a href="{{ route('experience-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
