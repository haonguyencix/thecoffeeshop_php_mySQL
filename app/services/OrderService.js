function OrderService() {
  this.cartList = [];

  this.showProduct = function(productId) {
    return $.ajax({
      type: "GET",
      url: "cart-modal-container.php",
      data: { productId }
    });
  };

  this.addToCart = function(cartItem) {
    this.cartList.push(cartItem);
  };

  this.removeFromCart = function(cartId) {
    let index = this.cartList.findIndex(function(item) {
      return cartId === item.oderId;
    });
    this.cartList.splice(index, 1);
  };
}
