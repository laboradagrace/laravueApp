@extends('base')

@section('main')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ url('css/form.css') }}" rel="stylesheet">
<div class="row">
    <div class="banner">
        <h1><b>Add Human</b></h1>
    </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </!
            </div><br />
            @endif
            <form method="post" class="form" action="{{route('store')}}" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" autocomplete="adsfasdfad" />
                    <span class="error">
                    @if($errors->has('first_name'))
                        {{ $errors->first('first_name') }}
                    @endif
                    </span>
                </div>

                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" />
                    @if($errors->has('middle_name'))
                        <span class="error">
                            {{ $errors->first('middle_name') }}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" autocomplete="adsfasdfad" />
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" name="age" value="{{ old('age') }}"  />
                    <span class="error">
                        @if($errors->has('age'))
                            {{ $errors->first('age') }}
                        @endif
                    </span>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" value="1" {{ old('gender') == 1 ? 'checked' : '' }}> Male
                    <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}> Female
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" />
                </div>
                <button name= "submit" type="submit" class="btn btn-info">Add Human</button>
                <br>
            </form>
            <br><br>
        </div>
    </div>
</div>
@endsection