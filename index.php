<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini Shopping Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>

<body style="background-color:rgb(185, 82, 95)">
    <h3 style="text-align: center; color: rgb(0, 0, 0);">Shopping Cart</h3>
    <hr>
    <div style="text-align: center;">
        <label for="">Product Name: </label>
        <input type="text" class="product">
        <br>
        <hr>
        <label for="">Product Price:   </label>
        <input type="text" class="productPrice">
        <br>
        <hr>
        <label for="">Product Quantity</label>
        <input type="text" class="productQuantity">
        <br>
        <hr>
        <button style="background-color: palegreen;" class="addButton">Add</button>
        <hr>

        <h4 style="text-align: center;text-decoration: powderblue; ">Items Added in cart</h4>
        <ul class="productList">

        </ul>
    </div>
    <div style="text-align: center;">
        <button class="removeButton" style="background-color: palegreen">Remove All</button>
    </div>

    <script src="/mini_shopping_cart/app.js"></script>
</body>

</html>