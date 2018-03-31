@extends('layout.admin')

@section('content')
    <div class="page-header">
           <h1>Clients / Create </h1>
       </div>



       <div class="row">
           <div class="col-md-12">

               <form action="{{ route('clients.store') }}" method="POST">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">

                   <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" name="name" class="form-control" value="{{  Session::getOldInput('name') }}"/>
                        {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "name") !!}
                   </div>
                       <div class="form-group">
                        <label for="phone">PHONE</label>
                        <input type="text" name="phone" class="form-control" value="{{  Session::getOldInput('phone') }}"/>

                   </div>
                       <div class="form-group">
                        <label for="note">NOTE</label>
                        <textarea name="note" class="form-control">{{ Session::getOldInput('note') }}</textarea>

                   </div>



               <a class="btn btn-default" href="{{ route('clients.index') }}">Back</a>
               <button class="btn btn-primary" type="submit" >Create</button>
               </form>
           </div>
       </div>


@endsection