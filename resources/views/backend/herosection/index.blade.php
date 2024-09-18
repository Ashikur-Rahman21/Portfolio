@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-4">
        <a class="btn btn-primary mb-3 float-end" href="{{ route('hero-section.create') }}">Add New</a>
        <table class="table table-striped table-bordered border" style="table-layout: fixed; width: 100%;">
            <thead class="table-dark">
                <tr>
                    <th class="col-md-2 text-break">Name</th>
                    <th class="col-md-2 text-break">Title</th>
                    <th class="col-md-4 text-break">Description</th>
                    <th class="col-md-2 text-break">Image</th>
                    <th class="col-md-2 text-break">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($heroSections as $heroSection)
                    <tr>
                        <td class="col-md-2 text-break">{{ $heroSection->name }}</td>
                        <td class="col-md-2 text-break">{{ $heroSection->title }}</td>
                        <td class="col-md-4 text-break">{{ $heroSection->description }}</td>
                        <td class="col-md-2 text-break">{{ $heroSection->image }}</td>
                        <td class="col-md-2 text-break d-flex">
                            <a href="{{ route('hero-section.edit', $heroSection->id) }}" class="btn btn-success me-2 rounded-2 text-black"><i class="fa fa-edit"></i></a>
                            <form action="{{ route('hero-section.destroy', $heroSection->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger me-2 rounded-2 text-black"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
