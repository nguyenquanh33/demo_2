@vite(["resources/sass/app.scss", "resources/js/app.js"])


<div class="container">
    @include("Menu")

    <div class="container">
        <h4>Product Edit</h4>

        <form action="/product-update" method="post">
            <input type="hidden" name="id" value="{{$product -> id}}">
            @csrf
            <div class="mb3">
                <label for="productName">Product Name</label>
                <input type="text" name="productName" value="{{$product -> product_name}}" class="form-control">
            </div>

            <div class="mb3">
                <label for="price">Price</label>
                <input type="text" name="price" value="{{$product -> price}}" class="form-control">
            </div>

            <div class="mb3">
                <label for="description">Description</label>
                <input type="text" name="description" value="{{$product -> description}}" class="form-control">
            </div>

            <div class="mb3">
                <label for="iamge">Image</label>
                <input type="text" name="image" value="{{$product -> image}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
