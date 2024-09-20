@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-4">
        <a class="btn btn-primary mb-3 float-end" href="{{ route('about-section.create') }}">Add New</a>
        <table class="table table-striped table-bordered border" style="table-layout: fixed; width: 100%;">
            <thead class="table-dark">
                <tr>
                    <th class="aboutSection text-break">Name</th>
                    <th class="aboutSection text-break">Email</th>
                    <th class="aboutSection text-break">Phone</th>
                    <th class="aboutSection text-break">Image</th>
                    <th class="aboutSection text-break">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutSections as $aboutSection)
                    <tr>
                        <td class="aboutSection text-break">{{ $aboutSection->name }}</td>
                        <td class="aboutSection text-break">{{ $aboutSection->email }}</td>
                        <td class="aboutSection text-break">{{ $aboutSection->phone }}</td>
                        <td class="aboutSection text-break">{{ $aboutSection->image }}</td>
                        <td class="aboutSection text-break d-flex">
                            <a href="{{ route('about-section.edit', $aboutSection->id) }}" class="btn btn-success me-2 rounded-2 text-black"><i class="fa fa-edit"></i></a>

                            <form action="{{ route('about-section.destroy', $aboutSection->id) }}" method="POST">
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
