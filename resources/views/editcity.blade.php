<x-sidebar />

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
<div class="" style="margin-left: 400px; padding-top: 200px;">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>Add City</i></b>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/editcity',$editcity->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="typeahead form-control"  name="name" id="name"  value="{{ $editcity->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>

</body>

