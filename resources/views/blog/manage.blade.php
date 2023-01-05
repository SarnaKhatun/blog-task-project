@extends('front.master')
@section('title')
    Manage Blog
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage Blog</h4>
                        </div>
                        <div class="card-body">
                            <table class="table-responsive table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Blog Name</th>
                                    <th>Category Name</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Viewers</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->name}}</td>
                                        <td>{{$blog->category->name}}</td>
                                        <td>{!! $blog->short_description !!}</td>
                                        <td>{!! \Illuminate\Support\Str::words($blog->long_description, 3, '...') !!}</td>
                                        <td>{{$blog->viewers}}</td>
                                        <td><img src="{{asset($blog->image)}}" alt="" style="height: 90px; width: 90px;"></td>
                                        <td>
                                            <a href="{{route('blogs.edit', ['id' => $blog->id])}}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('blogs.delete', ['id' => $blog->id])}}" class="btn btn-danger" onclick="deleteBlog({{$blog->id}})"><i class="fa fa-trash"></i></a>
                                            <form action="{{route('blogs.delete', ['id' => $blog->id])}}" method="post" id="delete{{$blog->id}}">
                                                @csrf
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

    <script>
        function deleteBlog(id) {
            event.preventDefault();
            var blog = confirm('Are you sure????');
            if (blog)
            {
                document.getElementById('delete'+id).submit();
            }
        }
    </script>
@endsection
