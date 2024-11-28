@extends("layouts.admin.default")
@section("title", "Products-add")


@section("content")
    <div class="container">

        <div class="container">
            <h2 class="p-3">Product Add</h2>

            <form action="/product-save" method="post">
                @csrf
                <div class="mb-3">
                    <label for="productName">Product Name</label>
                    <input type="text" name="productName" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" min="0">
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="text" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        @foreach($category as $cate)
                            <option>
                            {{$cate -> name}}
                            <option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
