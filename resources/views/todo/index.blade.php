
@extends('layout.header_footer')

@section('title')
 To-do-List
@endsection

@section('index_page_content')
    <center><h1 style="margin-top: 20px;">To do list</h1></center>

@if(session()->has('success'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  		<strong>{{session()->get('success')}}</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session()->has('success_delete'))
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
  		<strong>{{session()->get('success_delete')}}</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<!-- success_edit -->

@if(session()->has('success_edit'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>{{session()->get('success_edit')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

    <div class="container" style="width: 60%;">
	    @foreach($check_in_web_index as $check_print)
	    <ul class="list-group">
  			<li class="list-group-item ">{{$check_print->name}}

  				@if($check_print->completed == '0')
  					<a style="margin-left: 5px;" href="{{$check_print->id}}/completed" class="btn btn-warning float-right">Complete</a>
  			    @else
  			    	<button style="margin-left: 5px;" type="button" class="btn btn-warning float-right" disabled>completed</button>
  			    @endif
  			    <a href="full/{{$check_print->id}}" class="btn btn-dark float-right">View</a>
  					</li>
		</ul>
	    @endforeach
	</div>
@endsection