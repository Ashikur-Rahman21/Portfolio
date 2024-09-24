@extends('backend.layouts.app')

@section('backend')
    <div class="container mt-4">
        <a class="btn btn-primary mb-3 float-end" href="{{ route('skill-section.create') }}">Add New</a>
        <table class="table table-striped table-bordered border" style="table-layout: fixed; width: 100%;">
            <thead class="table-dark">
                <tr>
                    <th class="text-break">Name</th>
                    <th class="text-break">Percentage</th>
                    <th class="text-break">Title</th>
                    <th class="text-break">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skillSections as $skillSection)
                    <tr>
                        <td class="text-break">{{ $skillSection->name }}</td>
                        <td class="text-break">{{ $skillSection->percentage }}</td>
                        <td class="text-break">{{ $skillSection->title }}</td>
                        <td class="text-break d-flex">
                            <a href="{{ route('skill-section.edit', $skillSection->id) }}"
                                class="btn btn-success me-2 rounded-2 text-black"><i class="fa fa-edit"></i></a>

                            <form action="{{ route('skill-section.destroy', $skillSection->id) }}" method="POST">
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
