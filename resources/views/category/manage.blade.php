@extends('front.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-capitalize text-center">manage category</h4>
                        </div>
                        <div class="card-body">
                            <table class="table-responsive table table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            <form action="{{route('categories.destroy',$category->id)}}" method="post" onsubmit="return confirm('are you sure??')">
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
