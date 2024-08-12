<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <h1>Edit Product</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" value="{{$product->name}}" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description" value="{{$product->description}}" />
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="Price" value="{{$product->price}}" />
        </div>
        <input type="submit" value="Update" />
    </form>
</body>
</html>