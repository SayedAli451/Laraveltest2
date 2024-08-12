<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        form {
            display: inline;
        }
        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }
        .success-message {
            background-color: #28a745;
            color: white;
            padding: 10px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>${{$product->price}}</td>
            <td>
                <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                <form method="post" action="{{ route('product.delete', ['product' => $product]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @if(session()->has('success'))
    <div class="success-message">
        {{session('success')}}
    </div>
    @endif
</body>
</html>