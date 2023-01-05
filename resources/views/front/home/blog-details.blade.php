@extends('front.master')
@section('title')
    Blog Details Page
@endsection
@section('body')
    <section class="py-5" style="background: #8bc43f">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-dark text-center text-capitalize pt-5 fw-bolder">{{$blog->category->name}}</h1>
                    <h5 class="text-dark text-center pt-2">Blog Details</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <img src="{{asset($blog->image)}}" alt="" style="height: 300px;" class="card-img-top w-100">
                        <div class="card-body">
                            <div class="row mt-1">
                                <div class="col-md-3 ms-4" style="background: #8bc43f">
                                    <p class="text-capitalize text-light text-center"><i class="fa fa-user"></i> by sarna      &nbsp; &nbsp;  |</p>
                                </div>
                                <div class="col-md-3 " style="background: #8bc43f">
                                    <p class="text-capitalize text-light text-center"><i class="fa fa-calendar-days"></i>
                                        {{\Illuminate\Support\Carbon::parse($blog->created_at)->format('d M,Y')}}     &nbsp; |</p>
                                </div>
                                <div class="col-md-4 " style="background: #8bc43f">
                                    <p class="text-capitalize text-light text-center"><i class="fa fa-tags"></i> {{$blog->category->name}} |</p>
                                </div>
                                <div class="col-md-1 " style="background: #8bc43f">
                                    <p class="text-capitalize text-light text-center"><i class="fa fa-eye"></i> {{$blog->viewers}}</p>
                                </div>
                            </div>
                            <div class="row mt-3 ms-1">

                                <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->short_description}}</p>
                                <h4 class="fw-bold">{{$blog->name}}</h4>
                                <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->long_description}}</p>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6 float-end">
                                    <img class="rounded" src="{{asset($blog->image)}}" alt="fgdgfg" style="height: 300px; width: 300px;">
                                </div>
                                <div class="col-md-3 float-end">
                                    <img class="rounded" src="{{asset($blog->image)}}" alt="fgdgfg" style="height: 300px; width: 300px;">
                                </div>
                            </div>

                            <div class="row mt-3 ms-1">
                                <h4 class="fw-bold">{{$blog->category->name}}</h4>
                                <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->name}}</p>

                                <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->short_description}}</p>

                                <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->long_description}}</p>

                                <hr />


                                <div class="row mt3 ">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6 class="text-capitalize">tags:</h6>
                                            </div>
                                            <div class="col-md-3">
                                                @foreach($tags as $tag)
                                                <span class="" style="height: 100px; width: 100px;">{{$tag->name}}</span>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h6 class="text-capitalize">share:</h6>
                                            </div>
                                            <div class="col-md-2 text-light">
                                                <span class="bg-primary" ><i class="fab fa-facebook"></i></span>
                                            </div>
                                            <div class="col-md-2 text-light">
                                                <span class="bg-info"><i class="fab fa-twitter"></i></span>
                                            </div>
                                            <div class="col-md-2 text-light">
                                                <span class="bg-primary" ><i class="fab fa-linkedin-in"></i></span>
                                            </div>
                                            <div class="col-md-2 text-light">
                                                <span class="bg-danger" ><i class="fab fa-youtube"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-body">
                                <fieldset>
                                    <div class="field text-light">
                                        <input type="search" class="form-control" placeholder="Search here...">
                                        <i class="fa fa-search pt-2 ps-3 mr-3 w-25" style="background: #8bc43f;"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="card card-body">
                                <div class="row" style="background: #8bc43f; border-radius: 5px">
                                    <h4 class="text-capitalize text-light">recent post</h4>
                                </div>
                                @foreach($sliders as $slider)
                                    <div class="row mt-4">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="{{asset($slider->image)}}" alt="" class="card-img-top w-100" style="height: 80px;">
                                            </div>
                                        </div>
                                        <div class="col-md-7 mx-auto">
                                            <h6 class="mb-3">
                                                <a class="text-dark" style="text-decoration: none" href="">{{$slider->name}}</a>
                                            </h6>
                                            <p class="meta"><i class="fa fa-calendar-days"></i> {{\Illuminate\Support\Carbon::parse($slider->created_at)->format('d M, Y')}}</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 ">
                        <div class="col-md-12 ">
                            <div class="card card-body ">
                                <div class="row" style="background: #8bc43f; border-radius: 5px">
                                    <h4 class="text-capitalize text-light">categories</h4>
                                </div>
                                @foreach($categories as $category)
                                        <div class="row mt-4">
                                            <div class="col-md-8">
                                                <h5 class="text-capitalize">{{$category->name}}</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="ms-5" style="height: 20px; width: 20px; background: black; color: ghostwhite">03</span>
                                            </div>
                                        </div>
                                @endforeach

                            </div>
                        </div>
                    </div>


                    <div class="row mt-5 ">
                        <div class="col-md-12 ">
                            <div class="card card-body ">
                                <div class="row" style="background: #8bc43f; border-radius: 5px">
                                    <h4 class="text-capitalize text-light">popular tags</h4>
                                </div>
                                <div class="row mt-4">
                                    @foreach($tags as $tag)
                                        <div class="col-md-4">
                                            <div class="card card-body w-100 text-center text-capitalize" style="color: black">
                                                {{$tag->name}}</div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/')}}assets/img/1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}assets/img/2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('/')}}assets/img/2.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- comments -->
                    <div class="card card-body">
                        <h4 class="mb-20"><i class="fa fa-message text-success"></i> Comments (6)</h4>
                        <!-- comment item -->
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="img-fluid rounded w-100" src="{{asset('/')}}assets/img/1.png" alt="user-image" style="height: 50px; width: 50px;">
                            </div>
                            <div class=" rounded py-3 px-4">
                                <div class="mb-10">
                                    <h5>Johnathan</h5>
                                    <h6 class="font-weight-light">Few Hours Ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua.</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a class="d-inline-block text-dark mr-2" href="">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                            <h4> <i class="fa fa-reply text-success"></i> Leave A Comment</h4>
                            <form action="{{route('add.comment')}}" method="post">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control mb-30" id="user-name" name="name" placeholder="Enter Your Name*">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" id="user-email" name="email" class="form-control mb-30"
                                               placeholder="Enter Your Email Address*">
                                    </div>
                                </div>
                               <div class="row mt-3">
                                   <div class="col-12">
                <textarea name="comment" id="comment" class="form-control mb-30 p-2" placeholder="Leave your comment"
                          style="height: 180px;"></textarea>
                                   </div>
                               </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-outline-success" value="Post A Comment">
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
