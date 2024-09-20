
var modal = document.getElementById("addProductModal");
var btn = document.getElementById("add-btn");
var span = document.getElementById("closeModal");

btn.onclick = function() {
        modal.style.display = "block";
        body.classList.add("blur"); 
}

span.onclick = function() {
        modal.style.display = "none";
        body.classList.remove("blur"); 

}

window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            body.classList.remove("blur"); 
    }
}

document.getElementById("addProductForm").onsubmit = function(e) {
    e.preventDefault();
    console.log("Product added!");
    modal.style.display = "none";
    body.classList.remove("blur");
}