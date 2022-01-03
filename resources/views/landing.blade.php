@extends('layouts.app')

@section('pageTitle')
Jalan-jalan Skuy!
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-3 pb-3 shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="shadow-sm btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row vh-100 justify-content-center pt-5 pb-5">
        <div class="col align-self-center">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="shadow-sm btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
        <div class="col align-self-center d-none d-sm-none d-md-block d-lg-block d-xl-block">
            <img src="{{ asset('lib/img/bmw.jpg')}}" class="img-fluid">
        </div>
    </div>
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col align-self-center">
            <div class="row text-center">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                    <p><a class="shadow-sm btn btn-primary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                    <p><a class="shadow-sm btn btn-primary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content. And lastly this, the third column.</p>
                    <p><a class="shadow-sm btn btn-primary" href="#">View details »</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-md-7 align-self-center" data-aos="fade-left-up">
            <h2 class="heading">First heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5 align-self-center" data-aos="fade-right-up">
            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
    </div>
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col-md-7 order-md-2 align-self-center">
            <h2 class="heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another  Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1 align-self-center">
            <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
    </div>
    <div class="row justify-content-center pt-5 pb-5">
        <div class="col align-self-center">
            <div class="row text-left">
                <div class="col-lg-3 text-center align-self-center">
                    <h2>Our Team</h2>
                    <p>Meet Our Team.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Humam A A</h2>
                    <p class="font-italic">Hustler</p>
                    <p><a class="shadow-sm btn btn-primary" href="#">Profile »</a></p>
                </div>
                <div class="col-lg-3 text-center">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Wildan Ricky W</h2>
                    <p class="font-italic">Hipster</p>
                    <p><a class="shadow-sm btn btn-primary" href="#">Profile »</a></p>
                </div>
                <div class="col-lg-3 text-center">
                    <svg class="bd-placeholder-img rounded-circle pb-2" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Akbar Bintang M</h2>
                    <p>Hacker</p>
                    <p class="font-italic"><a class="shadow-sm btn btn-primary" href="#">Profile »</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3">
    <div class="container text-center">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>
@endsection

@section('script')

@endsection
