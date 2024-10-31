<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="fa-solid fa-bars text-white fa-2xl"></i>
            </button>
            <div class="sidebar-logo">
                <a href="#">Menu</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item mb-3">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-shop fa-xl p-1"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-user-tie fa-xl p-1"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-user fa-xl p-1"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="sidebar-item mb-3">
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-cart-shopping fa-xl p-1"></i>
                    <span>Orders</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-comment fa-xl text-white p-1"></i>
                <span>Comment</span>
            </a>
        </div>
    </aside>
    <div class="main p-3" style="background: #F8F8F8">
        <header class="p-3 mb-3">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <a href="/admin" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <img src="https://9xgarden.com/wp-content/uploads/2021/03/cropped-9x-garden-logo-21-4.png"
                             alt="" width="190px" height="50px">
                    </a>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="???" width="32" height="32"
                                 class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item logout" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="row mx-3">
            <div class="col-3 p-3 card-body bg-white box-shadow flex-none" style="border-radius: 20px">
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
            <div class="col-8 mx-3">
                <div class=" p-3 card-body bg-white box-shadow" style="border-radius: 20px">
                    <div class="p-3">
                        <h3 class="mb-5 text-gradius">Manage</h3>
                        <div class="d-flex m-2">
                            <a href="">
                                <div class="d-flex" style="margin-right: 75px">
                                    <i class="fa-solid fa-cart-shopping fa-2xl p-3"></i>
                                    <div class="d-flex flex-column">
                                        <p style="color:#A9A9A9">Orders</p>
                                        <h5 class="text-danger"><b>3</b></h5>
                                    </div>
                                </div>
                            </a>

                            <a href="">
                                <div class="d-flex" style="margin-right: 75px">
                                    <i class="fa-solid fa-user fa-2xl p-3"></i>
                                    <div class="d-flex flex-column">
                                        <p style="color:#A9A9A9">Customers</p>
                                        <h5 class="text-danger"><b>3</b></h5>
                                    </div>
                                </div>
                            </a>

                            <a href="">
                                <div class="d-flex" style="margin-right: 75px">
                                    <i class="fa-solid fa-store fa-xl p-3"></i>
                                    <div class="d-flex flex-column">
                                        <p style="color:#A9A9A9">Products</p>
                                        <h5 class="text-danger"><b>3</b></h5>
                                    </div>
                                </div>
                            </a>

                            <a href="">
                                <div class="d-flex">
                                    <i class="fa-solid fa-user-tie fa-2xl p-3"></i>
                                    <div class="d-flex flex-column">
                                        <p style="color:#A9A9A9">Users</p>
                                        <h5 class="text-danger"><b>3</b></h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const hamBurger = document.querySelector(".toggle-btn");

    hamBurger.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("expand");
    });
</script>
</body>

</html>
