@extends('master')
@section('content')
<section>

    <table class="table table-hover container">
        <thead>
            <tr>
                <th>Roll</th>
                <th>Name</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $stu)


            <tr>
                <td>{{ $stu->roll }}</td>
                <td>{{ $stu->name }}</td>
                <td>{{ $stu->password }}</td>
                <td>
                    <a href="{{ route('edit',$stu->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('destroy',$stu->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>
@endsection



