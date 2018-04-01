@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Clients / Show </h1>
    </div>


     <!-- Icon Cards-->
     <h2>{{$client->name}}</h2>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
         <div class="alert alert-success" role="alert">
         <h2 class="text-center">{{ $report->countPaid }}</h2>
         <p class="text-center">Paid</p>
         </div>
        </div>
       <div class="col-xl-3 col-sm-6 mb-3">
        <div class="alert alert-danger" role="alert">
        <h2 class="text-center">{{ $report->countNotPaid }}</h2>
        <p class="text-center">Not Paid</p>
        </div>
       </div>
      </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                    <div class="form-group">
                     <label for="phone">PHONE</label>
                     <p class="form-control-static">{{$client->phone}}</p>
                </div>
                    <div class="form-group">
                     <label for="note">NOTE</label>
                     <p class="form-control-static">{{$client->note}}</p>
                </div>

            <a class="btn btn-default" href="{{ route('clients.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Edit</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection