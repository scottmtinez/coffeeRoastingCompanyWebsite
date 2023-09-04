function cartPopup(){
    var cartContainer = document.getElementById('cart-container');
    var accountContainer = document.getElementById('account-container');

    if(cartContainer.style.display == "none"){
        cartContainer.style.display = "block";
        accountContainer.style.display = "none";
    }else{
        cartContainer.style.display = "none";
    }
}