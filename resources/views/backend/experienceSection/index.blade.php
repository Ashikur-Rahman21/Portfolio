@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-4">
        <a class="btn btn-primary mb-3 float-end" href="{{ route('experience-section.create') }}">Add New</a>
        <table class="table table-striped table-bordered border" style="table-layout: fixed; width: 100%;">
            <thead class="table-dark">
                <tr>
                    <th class="text-break">Institute Name</th>
                    <th class="text-break">Address</th>
                    <th class="text-break">Year</th>
                    <th class="text-break">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                    <tr>
                        <td class="text-break">{{ $experience->name }}</td>
                        <td class="text-break">{{ $experience->address }}</td>
                        <td class="text-break">{{ $experience->year }}</td>
                        <td class="text-break d-flex">
                            <a href="{{ route('experience-section.edit', $experience->id) }}"
                                class="btn btn-success me-2 rounded-2 text-black"><i class="fa fa-edit"></i></a>

                            <form action="{{ route('experience-section.destroy', $experience->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger me-2 rounded-2 text-black"><i
                                        class="fa fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
