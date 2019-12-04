$(document).ready(function() {
  let orderService = new OrderService();
  let userService = new UserService();
  let quantity = 1;
  let price = 0;
  let total = 0;
  let productId = "";

  getLocalStorage("cartList");

  $(".btn__buynow").click(function(e) {
    e.preventDefault();
    productId = $(this).data("productid");
    orderService
      .showProduct(productId)
      .done(function(result) {
        $("#modalContainer").html(result);
        price =
          $("#productPrice")
            .text()
            .trim() * 1;
        quantity = 1;
        total = price;
        $("#quantity").html(quantity);
        $("#productTotal").html(total);
      })
      .fail(function(err) {
        console.log(err);
      });
  });

  $("#signin-submit").click(function(e) {
    e.preventDefault();
    let user = $("#signin-form").serialize();
    userService
      .signin(user)
      .done(function(result) {
        if (result === "Đăng nhập thành công!") {
          $("#signin").modal("toggle");
          swal("Đăng nhập thành công!", "Chọn OK để tiếp tục", "success")
          .then(() => location.reload());
        } else if (result === "Sao không chịu nhập gì hết vậy!") {
          swal("Sao không chịu nhập gì hết vậy", "Kiểm tra lại nè", "warning");
        } else if (result === "Tên đăng nhập này không tồn tại!" || result === "Sai mật khẩu rồi chời ơi!") {
          swal("Tài khoản hay là mật khẩu gì đó bị sai rồi!", "Kiểm tra lại nè", "error");
        }
      })
      .fail(function(err) {
        console.log(err);
      });
  });

  $("#signup-submit").click(function(e) {
    e.preventDefault();
    let user = $("#signup-form").serialize();
    userService
      .signup(user)
      .done(function(result) {
        if (result === "Đăng kí thành công!") {
          $("#signup").modal("toggle");
          swal("Đăng ký thành công!", "Bạn có thể đăng nhập được rồi, hì hì!", "success")
          .then(() => location.reload());
        } else if (result === "Tài khoản hoặc email có rồi!") {
          swal("Tài khoản hoặc là email có rồi bạn ơi!", "Ráng kiếm gì hay hay đặt đi!", "warning");
        };
      })
      .fail(function(err) {
        console.log(err);
      });
  });

  $("#logout").click(function(e) {
    e.preventDefault();
    userService
      .logout()
      .done(function(result) {
        if (result === "Đăng xuất thành công!") {
          swal("Đăng xuất thành công!", "Chọn OK để tiếp tục", "success")
          .then(() => location.reload());
        }
      })
      .fail(function(err) {
        console.log(err);
      });
  });

  $("#btnIncrease").click(function() {
    quantity += 1;
    total = price * quantity;
    $("#quantity").html(quantity);
    $("#productTotal").html(total);
  });

  $("#btnDecrease").click(function() {
    if (quantity > 1) {
      quantity -= 1;
      total = price * quantity;
    }
    $("#quantity").html(quantity);
    $("#productTotal").html(total);
  });

  $("#addCart").click(function(e) {
    e.preventDefault();
    swal("Thêm vào thành công", "Chọn OK để tiếp tục", "success");
    $("#cart").modal("toggle");
    let id = Math.random()
      .toString(36)
      .substr(2, 9);
    let order = new OrderItem(id, productId, total, quantity);
    orderService.addToCart(order);
    $("#cartQuantity").html(orderService.cartList.length);
    setLocalStorage("cartList", orderService.cartList);
  });

  $("#cartQuantity").html(orderService.cartList.length);

  // setLocalStorage
  function setLocalStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
  }

  // getLocalStorage
  function getLocalStorage(key) {
    if (localStorage.getItem(key) != null) {
      orderService.cartList = JSON.parse(localStorage.getItem(key));
    }
  }
});
