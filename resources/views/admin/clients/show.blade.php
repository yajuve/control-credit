@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Clients / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$client->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$client->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="phone">PHONE</label>
                     <p class="form-control-static">{{$client->phone}}</p>
                </div>
                    <div class="form-group">
                     <label for="note">NOTE</label>
                     <p class="form-control-static">{{$client->note}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('clients.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Edit</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection