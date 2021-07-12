<x-navbar />

<form class="d-flex mt-1" action="{{ route('search') }}" method="GET">
    <input class="form-control me-2" name="search" style="width:500px;" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<div>

        @foreach($joblist as $job)
            <a href="/jobdetails/{{ $job->id }}">
            <div class="card mt-3" style="width:500px; margin-left: 30px;">
                <div class="card-body" >
                        <div>
                            <h4 class="card-title">{{$job->title}}</h4>
                            <i>{{$job->company_name}} </i>
                        </div>
                </div>
            </div>
            </a>
        @endforeach

</div>

