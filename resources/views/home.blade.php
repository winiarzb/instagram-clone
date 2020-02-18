@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net&_nc_ohc=qNYP8jXEMgoAX-r3SIH&oh=558dd71cfb33b82824307bc9d9ca36d9&oe=5ECEBCBA" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecapm.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/v/t51.2885-15/e35/c97.0.556.556a/56744758_379573665990554_4212823596187171289_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=LMtkcIM_a0gAX-xxIZF&oh=a0d9c1b7390df7abc5e0eeae1de8aa35&oe=5EC9D1E5" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/57244862_513269102746206_599322833260649013_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=KI0VoObkxsQAX9RVWFK&oh=11868d57655054fdaee8b630e969553e&oe=5EDFB81C" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/56485998_1283240165149874_2425499138108531736_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=hgTr-5bx0S4AX-F4zib&oh=c08298859a7024f8128f12aab1a9acb0&oe=5ECBD237" class="w-100">
        </div>
    </div>
</div>
@endsection
