@vite(["resources/sass/app.scss", "resources/js/app.js"])

<div class="container">
    @include("Menu")

    <div class="container">
        <h4>Product Add</h4>

        <form action="/product-save" method="post">
            @csrf
            <div class="mb3">
                <label for="productName">Product Name</label>
                <input type="text" name="productName" class="form-control">
            </div>

            <div class="mb3">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control">
            </div>

            <div class="mb3">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div>
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
