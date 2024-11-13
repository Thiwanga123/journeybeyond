
var modal = document.getElementById("addProductModal");
var btn = document.getElementById("add-btn");
var span = document.getElementById("closeModal");

btn.onclick = function() {
        modal.classList.add("active");
        body.classList.add("blur"); 
}

span.onclick = function() {
        modal.classList.remove("active");
        body.classList.remove("blur"); 

}

window.onclick = function(event) {
        if (event.target == modal) {
                modal.classList.remove("active");
                body.classList.remove("blur"); 
    }
}

document.getElementById("addProductForm").onsubmit = function(e) {
    e.preventDefault();
    console.log("Product added!");
    modal.classList.remove("active");
    body.classList.remove("blur");
}