<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Contact Manajemen</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}<li>
    @endforeach
    <ul>
        @endif
        <div>
<form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Name" />
</div>
<div>
<label>Number</label>
<input type="text" name="number" placeholder="Number" />
</div>
<div>
<label>Email</label>
<input type="text" name="email" placeholder="Email" />
</div>
<div>
<label>Description</label>
<input type="text" name="description" placeholder="Description" />
</div>
<div>
<input type="submit" value="Save a New Contact Manajemen" />
</div>
</form>
</body>
</html>
