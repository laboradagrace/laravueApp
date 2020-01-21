@extends('layout')

@section('sidebar')
<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
@endsection('sidebar')
@section('content')
<link rel="stylesheet" href="css/mypage.css">
<div id="table">
<table>
<tr>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>


@foreach($humans as $human)
<tr>
<td>{{$human['first_name']}}</td>
<td>{{$human['middle_name']}}</td>
<td>{{$human['last_name']}}</td>
<td>{{$human['email']}}</td>
<td>{{$human['age']}}</td>
@if($human['gender'] == 1)
    <td>Male</td>
@elseif($human['gender'] == 2)
    <td>Female</td>
@endif

<td>{{$human['address']}}</td>
</tr>
@endforeach

</tr>
</table>
</div>
@endsection