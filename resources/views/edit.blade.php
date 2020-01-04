@extends('master')

@section('content')
<div class="container">
    <h1>Create Student Data</h1>
    <form action="{{ route('update', $student->id) }}" method="post" class="form-group">
        {{ csrf_field() }}
        <input type="number" placeholder="Roll" name="roll" class="form-control" value="{{ $student->roll }}"><br>
        <input type="text" placeholder="Name" name="name" class="form-control" value="{{ $student->name }}"><br>
        <input type="text" placeholder="Password" name="password" class="form-control" value="{{ $student->password }}"><br>
        <input type="submit" value="Update" name="submit" class="btn btn-success">
    </form>
</div>

@endsection
