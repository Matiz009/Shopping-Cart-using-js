let product = document.querySelector(".product");
let Button = document.querySelector(".addButton");
let price = document.querySelector(".productPrice");
let quantity = document.querySelector(".productQuantity");

let cart = [];
if (localStorage.cart) {
    cart = JSON.parse(localStorage.cart);
}

Button.addEventListener("click", function() {
    for (let i in cart) {
        if (product.value === cart[i].Products) {
            cart[i].Quantity = parseInt(cart[i].Quantity) + parseInt(Quantity.value);
            localStorage.cart = JSON.stringify(cart);
            location.reload();
            return;
        }
    }
    let items = {
        Products: product.value,
        Price: price.value,
        Quantity: quantity.value
    };
    cart.push(items);
    localStorage.cart = JSON.stringify(cart);
    console.log(localStorage);
    location.reload();
});

function displayCart() {
    let productList = document.querySelector(".productList");
    for (let i in cart) {
        let item = cart[i];
        let listItem = document.createElement("li");
        listItem.innerHTML = "Product Name: " + item.Products + "<br>" + " Product Price:" + item.Price + "<br>" + " Product Quantity: " + item.Quantity;
        productList.appendChild(listItem);
    }
}

displayCart();