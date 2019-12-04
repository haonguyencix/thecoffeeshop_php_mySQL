function UserService() {
  this.signin = function(user) {
    return $.ajax({
      type: "POST",
      url: "signin-function.php",
      data: user
    });
  };

  this.signup = function(user) {
    console.log(user);
    return $.ajax({
      type: "POST",
      url: "signup-function.php",
      data: user
    });
  };

  this.logout = function() {
    return $.ajax({
      url: "logout.php"
    });
  };
}
