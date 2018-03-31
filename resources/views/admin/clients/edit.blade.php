@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Clients / Edit </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$client->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <input type="text" name="name" class="form-control" value="{{ \App\Libs\ValueHelper::getOldInput($client,'name') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "name") !!}
                </div>
                    <div class="form-group">
                     <label for="phone">PHONE</label>
                     <input type="text" name="phone" class="form-control" value="{{ \App\Libs\ValueHelper::getOldInput($client,'phone') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "phone") !!}
                </div>
                    <div class="form-group">
                     <label for="note">NOTE</label>
                     <textarea name="note" class="form-control">{{ \App\Libs\ValueHelper::getOldInput($client,'note') }}</textarea>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "note") !!}
                </div>



            <a class="btn btn-default" href="{{ route('clients.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection