@extends('backend.layouts.app')

@section('backend')
<style>
</style>
    <div class="container mt-4">
        <button class="btn btn-primary mb-3 float-end">Add New</button>
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
            <tbody >
                <tr>
                    <td class="col-md-2 text-break">Ashikur Rahman</td>
                    <td class="col-md-2 text-break">Laravel Developer</td>
                    <td class="col-md-4 text-break">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eos sapiente provident laudantium
                        quia, itaque minima alias, quam veniam exercitationem vero incidunt fugit fuga impedit.</td>
                    <td class="col-md-2 text-break">Image</td>
                    <td class="col-md-2 text-break">
                        <button class="btn btn-success me-2 rounded-2 text-black"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger me-2 rounded-2 text-black"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
