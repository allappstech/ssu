@extends('layouts.student')

@section('content')

    
    
	<div class="alert alert-success ">
	Personal Details
	</div>
	<div class="imgs">
	 <img   height="80"src="{{ asset('images/logo.png') }}"  > 
	 </div>
	 <br>
	 
	 <table class="table">
	 	<tr>
	 		<td width="150">Name</td>
	 		<td>Bello Abubakar</td>
	 	</tr>

	 	<tr>
	 		<td>Admission Number</td>
	 		<td>17234023</td>
	 	</tr>
	 	<tr>
	 		<td>Faculty</td>
	 		<td>Science</td>
	 	</tr>
	 	<tr>
	 		<td>Department</td>
	 		<td>Computer</td>
	 	</tr>
	 	<tr>
	 		<td>Course</td>
	 		<td>Computer Science</td>
	 	</tr>
	 	<tr>
	 		<td>Level</td>
	 		<td>400</td>
	 	</tr>
	 </table>
	 
 
@endsection