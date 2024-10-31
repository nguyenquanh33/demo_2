@extends("layouts.admin.default")
@section("title", "Quanh")


@section("content")
    <main class="container">


        <h5>Category List</h5>
        <a href="/category-add">Add Category</a>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <td>ID</td>
                <td>Category Name</td>
                <td>Total Products</td>
                <td>Status</td>
                <td colspan="2"></td>
            </tr>

            @foreach ($ListCategory as $obj)
                <tr>
                    <td>{{$obj -> id}}</td>
                    <td>{{$obj -> name}}</td>
                    <td>{{$obj-> total_products}}</td>
                    <td>{{$obj -> status}}</td>
                    <td><a href="/category-edit/{{$obj -> id}}" class="btn btn-info">Sửa</a></td>
                    <td><a href="/category-delete/{{$obj -> id}}" class="btn btn-danger">Xóa</a></td>
                </tr>
            @endforeach
        </table>
    </main>
@endsection
