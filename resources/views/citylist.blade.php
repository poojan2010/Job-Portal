<x-sidebar />

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>City List</i></center></h3>
</head>
<div style="margin-left: 248px;">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($citylist as $city)
            <tr>
                <td> {{$city->id}} </td>
                <td> {{$city->name}} </td>
                <td>
                    <form method="get">
                        @csrf
                        @method('UPDATE')
                        <a href="{{ url('/editcity',$city->id) }}" class="btn btn-success">EDIT</a>

                        @method('DELETE')
                        <a href="{{ url('/deletecity',$city->id) }}" type="submit" class="btn btn-danger">DELETE</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin-left: 42%;">
        {{ $citylist->links() }}
    </div>
</div>


