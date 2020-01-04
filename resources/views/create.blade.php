    @extends('master')

    @section('content')
    <div class="container">
        <h1>Create Student Data</h1>
        <form action="{{ route('store') }}" method="post" class="form-group">
            {{ csrf_field() }}
            <input type="number" placeholder="Roll" name="roll" class="form-control"><br>
            <input type="text" placeholder="Name" name="name" class="form-control"><br>
            <input type="text" placeholder="Password" name="password" class="form-control"><br>
            <input type="submit" value="Confirm" name="submit" class="btn btn-success">


        </form>
    </div>

    @endsection
