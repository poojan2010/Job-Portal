<x-sidebar />

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body>
<div class="" style="margin-left: 400px; padding-top: 120px;">
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>ADD JOB</i></b>
        </div>
        <div class="card-body">
            <form method="POST" action="/addjob" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label"><b>Job Title</b></label>
                    <input type="text" class="form-control"  name="title" id="title">
                </div>

                <div class="mb-3">
                    <label for="company_name" class="form-label"><b>Company Name</b></label>
                    <input type="text" class="form-control" name="company_name" id="company_name">
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label"><b>Experience</b></label>
                    <input type="text" class="form-control"  name="experience" id="experience">
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label"><b>Salary</b></label>
                    <input type="text" class="form-control"  name="salary" id="salary">
                </div>

                <div class="mb-3">
                    <label for="city_id" class="form-label"><b>Choose City</b></label><br>
                    <select name="city_id" id="city_id" style="width:665px;" class="form-control">
                        @foreach($citylist as $list)
                            <option value="{{$list->id}}">{{ $list->name }}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-primary">Add Job</button>
            </form>
        </div>
    </div>
</div>
</body>

