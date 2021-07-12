<x-sidebar />

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <h3><center><i>Show List</i></center></h3>
</head>
<div style="margin-left: 248px">
    <table class="mt-3 table table-striped" border="1px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Company Name</th>
            <th>Experience</th>
            <th>Salary</th>
            <th>City Id</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($joblist as $job)
            <tr>
                <td> {{$job->id}} </td>
                <td> {{$job->title}} </td>
                <td> {{$job->company_name}} </td>
                <td> {{$job->experience}} </td>
                <td> {{$job->salary}} </td>
                <td> {{$job->city_id}} </td>
                <td>
                    <form method="get">
                        @csrf
                        @method('UPDATE')
                        <a href="{{ url('/editjob',$job->id) }}" class="btn btn-success">Edit</a>

                        @method('DELETE')
                        <a href="{{ url('/deletejob',$job->id) }}" type="submit" class="btn btn-danger">Delete</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="margin-left: 42%;">
        {{ $joblist->links() }}
    </div>
</div>


