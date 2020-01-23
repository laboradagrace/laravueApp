@extends('layout')

<!-- @section('sidebar')
<div class="sidebar">
  <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
  <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
  <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
</div>
@endsection('sidebar') -->
<link rel="stylesheet" href="css/mypage.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body{
    color:white;
    text-align:center;
    width: 100%;
}
#btn{
    margin-left:23%;
}
table{
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
   
}
</style>
<div class="row">
@section('content')
        <h1 class="display-3"><i class="fa fa-users" aria-hidden="true"></i> Humans</h1>
        <br>
        <div id = "btn" class="col-sm-6">
			<a href="{{url('add')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Human</span></a>		
        </div>
        <br><br>
    <div class="table-wrapper">
        <center>
        <br>
        <table width="400" class="table table-dark">
   
            <thead style="background-color: black" >
            
                <tr>
                
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Address</td>
                    <td colspan=2>Actions</td>
                </tr>
            </thead>
            <tbody style="color:black">
                @foreach($humansinfo as $human)
                <tr>
                    <td>{{$human->id}}</td>
                    <td>{{$human->first_name}} {{$human->middle_name}} {{$human->last_name}}</td>
                    <td>{{$human->email}}</td>
                    <td>{{$human->age}}</td>
                    <td>{{$human->gender == 1 ? 'Male' : 'Female'}}</td>
                    <td>{{$human->address}}</td>
                    <td>
                        <a href="{{ url('edit',$human->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('destroy',$human->id)}}" method="post">
                            @csrf
                            <!-- @method('DELETE') -->
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </center>
    <div>
    
@endsection
</div>

