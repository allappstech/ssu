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
	 		<td>{{ Auth::user()->name}}</td>
	 	</tr>

	 	<tr>
	 		<td>Admission Number</td>
	 		<td>{{ Auth::user()->admissionNo}}</td>
	 	</tr>
	 	<tr>
	 		<td>Faculty</td>
	 		<td>{{ Auth::user()->admissionNo}}</td>
	 	</tr>
	 	<tr>
	 		<td>Department</td>
	 		<td>{{ Auth::user()->admissionNo}}</td>
	 	</tr>
	 	<tr>
	 		<td>Course</td>
	 		<td>{{ Auth::user()->admissionNo}} </td>
	 	</tr>
	 	<tr>
	 		<td>Level</td>
	 		<td>{{ Auth::user()->status}}</td>
	 	</tr>
	 </table>
	 
 
@endsection