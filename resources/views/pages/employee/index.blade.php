@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Fetch Data Database using Eloquent Model</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">designation</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($employee as $empdata)
                                    <tr>
                                        <th scope="row">{{ $empdata->id }}</th>
                                        <td>{{ $empdata->name }}</td>
                                        <td>{{ $empdata->email }}</td>
                                        <td>{{ $empdata->phone }}</td>
                                        <td>{{ $empdata->designation }}</td>
                                        <td>{{ $empdata->status }}</td>
                                        <td>
                                          <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
