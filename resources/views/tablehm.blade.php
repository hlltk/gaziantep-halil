<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Products</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Product</th>
        <th>Price</th>
    </tr>
    @foreach($user_products as $user_product)
        <tr>
            <td>{{user_products->user->name }}</td>
            <td>{{user_products->products->name}}</td>
            <td>{{user_products->products->price}}</td>

        </tr>
    @endforeach

</table>

</body>
</html>
$
