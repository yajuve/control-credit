@extends('../app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Add Link</div>

				<div class="panel-body">
					<form method="post" action="{{ route('validLink') }}">

  <div class="form-group">
    <label for="name">Email address</label>
    <input type="text" name="name" class="form-control" id="name" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Link</label>
    <input type="url" name="link" class="form-control" id="exampleInputPassword1" placeholder="Your Link">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token()  }}" >
  <button type="submit" class="btn btn-primary">Submit</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

