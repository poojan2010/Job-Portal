<x-navbar />

<div>

    <div class="card mt-3" style="width: 550px; margin-left: 100px; text-align: center;">
        <h1>{{ $joblist->title }}</h1>
        <br>
        <h4>Company Name</h4>
        <i>{{ $joblist->company_name }}</i>
        <br>
        <br>
        <h4>Experience</h4>
        <i>{{ $joblist->experience }}</i>
        <br><br>
        <h4>Salary</h4>
        <i>{{ $joblist->salary }}</i>
        <br><br>

        <a href="/applynow"><button class="btn btn-dark">Apply Now</button></a>
    </div>

</div>

