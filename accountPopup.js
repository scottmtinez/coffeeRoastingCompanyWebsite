function accountPopup(){
    var accountContainer = document.getElementById('account-container');
    var cartContainer = document.getElementById('cart-container');

    if(accountContainer.style.display == "none"){
        accountContainer.style.display = "block";
        cartContainer.style.display = "none";
    }else{
        accountContainer.style.display = "none";
    }
}