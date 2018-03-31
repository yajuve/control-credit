@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Credits / Create </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('credits.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="amount">AMOUNT</label>
                     <input type="text" name="amount" class="form-control" value="{{  Session::getOldInput('amount') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "amount") !!}
                </div>

                 <div class="checkbox">
                    <label>
                      <input type="checkbox" name="isPaid"  value="true"> Is Paid
                      {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "isPaid") !!}
                    </label>
                  </div>



                  <div class="form-group">
                       <label for="ispaid">Client</label>
                      <select class="form-control" name="client_id">
                      <option></option>
                      @foreach($clients as $client)
                          <option value="{{ $client->id }}">{{ $client->name  }}</option>
                      @endforeach
                        </select>
                  </div>

            <a class="btn btn-default" href="{{ route('credits.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</button>
            </form>
        </div>
    </div>


@endsection