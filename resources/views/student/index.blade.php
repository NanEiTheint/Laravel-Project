@extends("master")
@section('contect')


<div class="jumbotron py-5 my-5">
	<h1 class="display-4 pt-5">CONTACT US</h1>
	<p class="lead">This is The Voice Myanmar Page.</p>
	<hr>
	<a href="{{route('aboutpage')}}" class="btn btn-primary">Learn More</a>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Student List</h2>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Rollno</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Phoneno</th>
			      <th scope="col">Address</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($students as $student)
					{{-- <p>{{$student->rollno}}|{{$student->name}}>| --}}
					{{-- {{$student->email}}|{{$student->phone}}|{{$student->address}}</p> --}}
					<tr>
						<td>{{$student->id}}</td>
						<td>{{$student->rollno}}</td>
						<td>{{$student->name}}</td>
						<td>{{$student->email}}</td>
						<td>{{$student->phone}}</td>
						<td>{{$student->address}}</td>
					</tr>

				@endforeach
			    
			  </tbody>
			</table>
			
		</div>
	</div>
	
</div>

	
@endsection