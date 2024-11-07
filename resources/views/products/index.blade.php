<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact Manajemen</h1>
    <div>index</div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->number}}</td>
        <td>{{$product->email}}</td>
        <td>{{$product->description}}</td>
        <td>
       <a href="{{route('product.edit',['product'=>$product])}}">edit</a>
    </td>
<td>
<form action="{{ route('product.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

</td>
    @endforeach
    <table>
        <td>

        <div>
</body>
</html>
