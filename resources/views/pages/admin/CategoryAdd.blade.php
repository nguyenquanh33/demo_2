@vite(["resources/sass/app.scss", "resources/js/app.js"])

<div class="container">
    @include("Menu")

    <div class="container">
        <h4>Category Add</h4>

        <form action="/category-save" method="post">
            @csrf
            <div class="mb3">
                <label for="catgoryName">Category Name</label>
                <input type="text" name="categoryName" class="form-control">
            </div>


            <div class="mb3">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div>
                <label for="date">Image</label>
                <input type="date" name="date" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
