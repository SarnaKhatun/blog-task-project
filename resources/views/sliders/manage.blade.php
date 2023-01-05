@extends('front.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage slider</h4>
                        </div>
                        <div class="card-body">
                            <table class="table-responsive table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Slider Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->name}}</td>
                                        <td>{!! \Illuminate\Support\Str::words($slider->description, 3, '...') !!}</td>
                                        <td>{{$slider->viewers}}</td>
                                        <td><img src="{{asset($slider->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                                        <td>
                                            <a href="{{route('sliders.edit',  $slider->id)}}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <form action="{{route('sliders.destroy',  $slider->id)}}" method="post" onsubmit="return confirm('are you sure??')">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
