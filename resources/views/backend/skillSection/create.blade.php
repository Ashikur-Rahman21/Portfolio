@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-5">
        <div class="card shadow p-4" style="max-width: 600px; margin: auto;">
            <h3 class="card-title text-center mb-4">Create Skill Section Info</h3>
            <form method="POST" action="{{ route('skill-section.store') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name"
                        placeholder="Enter your name">
                    <div>
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group mb-3">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control rounded-pill" id="percentage" name="percentage"
                        placeholder="Enter your percentage">
                    @error('percentage')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="text-center">
                    <a href="{{ route('skill-section.index') }}"
                        class="btn btn-danger btn-lg rounded-pill px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-4 py-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
