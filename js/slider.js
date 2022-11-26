var slider = document.getElementById("stock-slider");
var price = document.getElementById("price");
price.innerHTML = slider.value;

slider.oninput = function(){
    price.innerHTML = this.value;
}