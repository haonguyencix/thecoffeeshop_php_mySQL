<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" action="">
                <form method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="signup-username" aria-describedby="emailHelp"
                            placeholder="Enter username" name="username" autocomplete="signin-username" />
                    </div>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="signup-fullname" aria-describedby="emailHelp"
                            placeholder="Enter fullname" name="fullname" autocomplete="signin-fullname" />
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="signup-password" placeholder="Enter password"
                            name="password" autocomplete="signin-password" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="signup-email" placeholder="Enter email" name="email" autocomplete="signin-email" />
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male" />
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female" />
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="Other" />
                        <label class="form-check-label" for="other">...other</label>
                    </div>
                    <input type="submit" class="btn btn-success w-100 my-3" name="signup" value="ĐĂNG KÝ" />
                </form>
            </div>
        </div>
    </div>
</div>