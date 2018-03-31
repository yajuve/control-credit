@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Credits / Edit </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('credits.update', $credit->id) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                     <input type="text" name="amount" class="form-control" value="{{ \App\Libs\ValueHelper::getOldInput($credit,'amount') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "amount") !!}
                </div>

                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="isPaid" value="true" @if(\App\Libs\ValueHelper::getOldInput($credit,'isPaid') == 1) {{ 'checked' }} @endif> Is Paid
                      {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "isPaid") !!}
                    </label>
                  </div>

                  <div class="form-group">
                    <label for="note">NOTE</label>
                    <textarea name="note" class="form-control">{{ Session::getOldInput('note') }}</textarea>
               </div>



            <a class="btn btn-default" href="{{ route('credits.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection