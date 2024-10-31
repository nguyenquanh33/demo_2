@vite(["resources/sass/app.scss", "resources/js/app.js"])
<body style="margin: 0">
<div class="header" style="height: 60px">
    <div class="container d-flex" style="justify-content: space-between">
        <img src="https://9xgarden.com/wp-content/uploads/2021/03/cropped-9x-garden-logo-21-4.png">

        <a href="#" class="mt-auto mb-auto btn" style="">Tài khoản</a>
    </div>
</div>

<div>
    <img class="banner w-100" style="height: 500px"
         src="/image/banner.png"
         alt="">
</div>
</body>


<style>
    .header {
        width: 100%;
        height: 40px;

        margin: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .header a:hover {
        background: #0dcaf0;
    }

    .banner {
        width: 100%;
        height: 300px;
    }
</style>
