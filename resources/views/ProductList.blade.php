<h5>Product List</h5>

<div>Full name: {{$fullName}}</div>
<div>Money: {{$money}}</div>

<div>
    @foreach($arrProduct as $haha)
        <p>Product name: {{$haha}}</p>
    @endforeach
</div>
