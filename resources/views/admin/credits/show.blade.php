@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Credits / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="client">Client</label>
                    <p class="form-control-static"><a href="{{route('clients.show', $credit->client->id)}}">{{$credit->client->name}}</a></p>
                </div>
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$credit->id}}</p>
                </div>
                <div class="form-group">
                     <label for="amount">AMOUNT</label>
                     <p class="form-control-static">
                         @if($credit->isPaid == 1)
                         <i class="text-success fa fa-fw fa-check-circle"></i>
                         @else <i class="text-danger fa fa-fw fa-times-circle"></i>
                         @endif {{$credit->amount}}
                     </p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ route('credits.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('credits.edit', $credit->id) }}">Edit</a>
            <form action="{{ route('credits.destroy', $credit->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection