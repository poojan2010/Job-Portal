<x-sidebar />

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>--}}
</head>

<body>
<div class="" style="margin-left: 400px; padding-top: 200px;">

    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>Add City</i></b>
        </div>
        <div class="card-body">
            <form method="POST" action="/addcities" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label"><b>Name</b></label>
                    <input type="text" class="typeahead form-control"  name="name" id="name" autocomplete="on">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>

{{--<script type="text/javascript">
    var path = "{{ route('addcities') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
            return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>--}}

</body>

