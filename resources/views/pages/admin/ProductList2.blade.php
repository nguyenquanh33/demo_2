@extends("layouts.admin.default")
@section("title", "Quanh")


@section("content")
    <div>
        <div class="container">
            <div class="card-body d-flex justify-content-left gap-3">
                <a href="/product-add" class="btn btn-primary mb-3">Thêm sản phẩm</a>
                <div class="dropdown col-md-2">
                    <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        @foreach($category as $cate)
                            <li>
                                <a @class(["dropdown-item", "disabled" => $cate->id  == $cate_id]) href="?cate={{$cate -> id}}">{{$cate -> name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="dropdown col-md-2">
                    <button class="btn btn-success dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        Status
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a @class(["dropdown-item", "disabled" => $status == 0 ]) href="?status=0">Active</a></li>
                        <li><a @class(["dropdown-item", "disabled" => $status == 1 ]) href="?status=1">Inactive</a></li>
                    </ul>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <td class="text-center">Id</td>
                    <td class="text-center">Product Name</td>
                    <td class="text-center">Price</td>
                    <td class="text-center">Category</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Imported Date</td>
                    <td class="text-center">Image</td>
                    <td colspan="2" class="text-center">#</td>
                </tr>
                @foreach($listProduct as $prd)
                    <tr>
                        <td>{{$prd -> id}}</td>
                        <td>{{$prd ->name}}</td>
                        <td>{{$prd ->price}}</td>
                        <td>{{$prd->cate_name}}</td>
                        <td>
                                <?php if ($prd->status): ?>
                            Inactive
                            <?php else: ?>
                            Active
                            <?php endif; ?>
                        </td>
                        <td>{{$prd ->created_at}}</td>
                        <td class="teẽex"><img width="150px" height="150px" src="{{$prd -> images}}" alt=""></td>
                        <td class="text-center">
                                <?php if ($prd->status == 0): ?>
                            <a href="/product-delete/{{$prd -> id}}"
                               class="btn btn-danger btn-sm"> Delete</a>
                            <?php elseif ($prd->status == 1): ?>
                            <a href="/product-delete/{{$prd -> id}}"
                               class="btn btn-danger btn-sm"> Active</a>
                            <?php endif; ?>
                        </td>

                        <td class="text-center"><a href="/product-edit/{{$prd -> id}}"
                                                   class="btn btn-primary btn-sm">Edit</a>
                        </td>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
