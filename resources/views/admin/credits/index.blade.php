@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Credits</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>AMOUNT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($credits as $credit)
                <tr>
                    <td>{{$credit->id}}</td>
                    <td>{{$credit->amount}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('credits.show', $credit->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('credits.edit', $credit->id) }}">Edit</a>
                        <form action="{{ route('credits.destroy', $credit->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('credits.create') }}">Create</a>
        </div>
    </div>


@endsection