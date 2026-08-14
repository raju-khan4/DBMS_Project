function addToCart(product, price) {
    let qty = 1; 

    
    let params = `product=${encodeURIComponent(product)}&price=${encodeURIComponent(price)}&quantity=${encodeURIComponent(qty)}`;

    fetch("add.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: params
    })
    .then(res => res.text())
    .then(data => {
       
        location.reload();
    })
    .catch(err => {
        console.error("Error adding to cart:", err);
    });
}


function updateQuantity(id, newQty) {
    if (newQty < 1) {
        return; 
    }

    let params = `id=${encodeURIComponent(id)}&quantity=${encodeURIComponent(newQty)}`;

    fetch("update.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: params
    })
    .then(res => res.text())
    .then(data => {
        location.reload();
    })
    .catch(err => {
        console.error("Error updating quantity:", err);
    });
}