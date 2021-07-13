<x-navbar />

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<div class="mt-3" style="margin-left: 400px">
    <div class="card" style="width: 700px;">
        <div class="card-header">
            <b><i>ADD CV</i></b>
        </div>
        <div class="card-body">
            <form method="POST" action="/addcv" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" class="form-control"  name="job_id" id="job_id" value="{{ $id }}">
                    <input type="hidden" class="form-control"  name="user_id" id="user_id" value="{{ Auth::User()->id }}">
                </div>

                <div class="mb-3">
                    <label for="cv" class="form-label"><b>CV</b></label>
                    <input type="file" class="form-control"  name="cv" id="cv">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>

    </div>
</div>

