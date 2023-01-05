@extends('front.master')
@section('title')
    Blog Page
@endsection
@section('body')
    <section class="py-5" style="background: #8bc43f">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-dark text-center text-capitalize pt-5 fw-bolder">our blog</h1>
                    <h5 class="text-dark text-center pt-2">News from WiztecBD and Around The World of Digital
                        <br /> Services Agency</h5>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    @foreach($blogs as $blog)
                    <a href="{{route('blog.details', ['id' => $blog->id])}}" class="text-dark nav-link">

                        <div class="card">
                            <img src="{{asset($blog->image)}}" alt="" style="height: 300px;" class="card-img-top w-100">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-3 ms-4" style="background: #8bc43f">
                                        <p class="text-capitalize text-light text-center"><i class="fa fa-user"></i> by sarna      &nbsp; &nbsp;  |</p>
                                    </div>
                                    <div class="col-md-3 " style="background: #8bc43f">
                                        <p class="text-capitalize text-light text-center"><i class="fa fa-calendar-days"></i>
                                            {{\Illuminate\Support\Carbon::parse($blog->created_at)->format('d M, Y')}}     &nbsp; |</p>
                                    </div>
                                    <div class="col-md-5 " style="background: #8bc43f">
                                        <p class="text-capitalize text-light text-center"><i class="fa fa-tags"></i>
                                            {{$blog->category->name}}</p>
                                    </div>
                                </div>
                                <div class="row mt-3 ms-1">
                                    <h4 class="fw-bold">{{$blog->name}}</h4>
                                    <p class="mt-2" style="font-size: 13px; text-align: justify;">{{$blog->short_description}}</p>
                                    <a href="{{route('blog.details', ['id' => $blog->id])}}" class="btn btn-outline-success w-25 ms-2 text-dark" >Read More <i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>

                    </a>
                    @endforeach
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
                                                <span class="ms-5" style="height: 20px; width: 20px; background: black; color: ghostwhite">{{$cate}}</span>
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

    {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
@endsection
