@extends('layout.header_footer')

@section('title')
 {{$todo_view->description}}
@endsection

@section('index_page_content')
    <center><h1 style="margin-top: 20px;">Details</h1></center>
    <div class="container" style="width: 60%;">
	    
	    		<div class="card text-center">
				  <div class="card-header">
				    {{$todo_view->name}}
				  </div>
				  <div class="card-body">
				    <p class="card-text">{{$todo_view->description}}.</p>
				    <button type="button" class="btn btn-danger" onclick="goBack()">Go Back</button>
				  </div>
				  <br>
				  <a href="/{{$todo_view->id}}/edit" class="btn btn-warning float-right">Edit</a>
				 <a href="/{{$todo_view->id}}/delete" class="btn btn-danger float-right">Delete</a>
				</div>
		</div>
@endsection