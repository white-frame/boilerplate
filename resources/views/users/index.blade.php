@extends("layouts.main")

@section("contents")
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <a class="pull-right" href="{{ url('users/create') }}">Create user</a>
            <h1>Users</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($entities as $entity)
                        <tr>
                            <td>{!! $entity->present()->id !!}</td>
                            <td>{!! $entity->present()->name !!}</td>
                            <td>{!! $entity->present()->email !!}</td>
                            <td>
                                <a href="{{ url('users/' . $entity->id) }}">View</a>
                                <a href="{{ url('users/' . $entity->id . '/edit') }}">Edit</a>
                                <a href="{{ url('users/' . $entity->id) }}?_token={{ csrf_token() }}" data-method="DELETE">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop