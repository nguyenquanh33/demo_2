@extends("layouts.admin.default")
@section("title", "Quanh")

@section("content")
    <main class="row container m-auto gap-3">
        <div class="col-3 p-3 card-body bg-white box-shadow flex" style="border-radius: 20px">
            <div class="d-flex align-items-center">
                <div>
                    <h4 class="d-flex">
                        <b class="text-gradius">
                            Congratulation!
                        </b>
                        🎉
                    </h4>
                    <h5>Total earn</h5>
                    <h3 class="text-danger p-1 mt-3">
                        <b>400000000k</b>
                    </h3>
                    <a href="" class="btn btn-outline-primary p-2 m-3">View</a>
                </div>
                <img class="p-4 w-100"
                     src="https://i.pinimg.com/236x/05/cc/c3/05ccc3f1053723914313fe237da2b23d.jpg"
                     alt="">
            </div>
        </div>
        <div class="col-8">
            <div class=" p-3 card-body bg-white box-shadow" style="border-radius: 20px">
                <div class="p-3">
                    <h3 class="mb-5 text-gradius">Manage</h3>
                    <div class="d-flex m-2">
                        <a href="">
                            <div class="d-flex" style="margin-right: 75px">
                                <i class="fa-solid fa-cart-shopping fa-2xl p-3" style="width: 30px; height:25px"></i>
                                <div class="d-flex flex-column">
                                    <p style="color:#A9A9A9">Orders</p>
                                    <h5 class="text-danger"><b>3</b></h5>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="d-flex" style="margin-right: 75px">
                                <i class="fa-solid fa-user fa-2xl p-3" style="width: 30px; height:25px"></i>
                                <div class="d-flex flex-column">
                                    <p style="color:#A9A9A9">Customers</p>
                                    <h5 class="text-danger"><b>3</b></h5>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="d-flex" style="margin-right: 75px">
                                <i class="fa-solid fa-store fa-xl p-3" style="width: 30px; height:25px"></i>
                                <div class="d-flex flex-column">
                                    <p style="color:#A9A9A9">Products</p>
                                    <h5 class="text-danger"><b>3</b></h5>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="d-flex">
                                <i class="fa-solid fa-user-tie fa-2xl p-3"></i>
                                <div class="d-flex flex-column" style="width: 30px; height:25px">
                                    <p style="color:#A9A9A9">Users</p>
                                    <h5 class="text-danger"><b>3</b></h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
