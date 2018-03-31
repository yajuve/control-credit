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



            <a class="btn btn-default" href="{{ route('credits.index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection