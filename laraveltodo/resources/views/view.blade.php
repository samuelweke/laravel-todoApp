@include('inc.viewheader')

	<div class="container">
			<h2 style="padding-left: 10%; padding-bottom: 10px;" >Todo:</h2>
			 <span style="padding-left: 10%;" >{{ $mylists->name}}</span>  
			<h2 style="padding-left: 10%; margin-top: 40px;"">Description:</h2>		
			<span style="padding-left: 5%;" >{{ $mylists->details}}</span>  
    </div>
    	

</body>
</html>