@extends('front.master')
@section('title')
    Edit Blog
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">edit Blog</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('blogs.update', ['id' => $blog->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" selected><--select a option--></option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{$blogCategory->id}}" {{$blogCategory->id == $blog->category_id ? "selected" : ''}}>{{$blogCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{$blog->name}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Viewers</label>
                                    <div class="col-md-8">
                                        <input type="number" name="viewers" class="form-control" value="{{$blog->viewers}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" id="" cols="30" rows="5" class="form-control">{{$blog->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" id="" cols="30" rows="6" class="form-control">{{$blog->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">

                                        <input type="file" name="image">
                                        @if(isset($blog->image))
                                            <img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
