<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a href="/home" class="navbar-brand" href="#">
            {{--<img src="../Images/movielogo.jpg" alt="" width="70" height="50">--}}
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{--<li class="mt-2">
                    <form class="d-flex mt-1" action="{{ route('search') }}" method="GET">
                        <input class="form-control me-2" name="search" style="width:500px;" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>--}}
                <li class="nav-link active mt-2" style="margin-left:680px;">
                    {{-- {{ Auth::guard('admin')->user()->name }}--}}
                </li>
                <li class="nav-link active mt-1" style="margin-left: 650px;">
                    <a href="/logout"><button class="btn btn-light">Logout</button></a>
                </li>
            </ul>


        </div>
    </div>
</nav>
