@include('inc.header')

	<div class="container">
		<div class="col-md-5" id="form">
	        <form class="form-horizontal" method="POST" action="{{ url('/insert') }}">
	        	{{ csrf_field() }}
	            <br style="clear:both">
	            @if(count($errors) >0)
	            	@foreach($errors->all() as $error)
	            		<div class="alert alert-danger">
	            			{{$error}}
	            		</div>
	            	@endforeach
	            @endif
    			<div class="form-group">
    				<label for="inputEmail" class="col-lg-2 control-label font-weight-bold">Todo:</label>
					<div class="col-lg-10">
						<input type="text" name="todo" class="form-control" id="todo" placeholder="Enter todo">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword" id=description class="col-lg-2 control-label font-weight-bold">Description:</label>
					<div class="col-lg-10">
                   		 <textarea class="form-control" name="description" placeholder="Enter description"></textarea> 
                    </div>
	            </div>

	            <div class="form-group">
	            	<div class="col-lg-10 col-lg-offset-2">
	            		<button type="submit" class="btn btn-success">Add Task</button>
	            	</div>
	            </div>
	        </form>
		</div>
		@if(session('info'))
		<div class="col-md-6 alert alert-success">
			
    		{{session('info')}}
    	@endif    	
		</div>
		
    </div>
    	
    <div class="container ">
    	<div class="row">
    	<h2>My Todos</h2>
    	
    	<table class="table table-striped table-light">
    		<thead>
    			<tr>
	    			<th>ID</th>
	    			<th>Todo</th>
	    			<th></th>
    			</tr>
    		</thead>
    		<tbody>
    			@if(count($mylists) > 0)
    				@foreach($mylists as $mylist)

    				
	    		<tr>
			      <td scope="row">{{ $mylist->id }}</td>
			      <td>{{ $mylist->name }}</td>
			      <td>
  <a href="{{ route('view', $mylist->id) }}" class="btn btn-dark" style=" box-shadow: 0 0 0 0rem">View</a> 
			     </td>
			    </tr>
			   		 @endforeach
    			@endif
		    </tbody>
    	</table>
    	</div>
    </div>

</body>
</html>