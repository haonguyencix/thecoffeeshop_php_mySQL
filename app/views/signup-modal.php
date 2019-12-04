<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="signup-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="signup-username" aria-describedby="emailHelp"
                            placeholder="Enter username" name="username" autocomplete="signin-username" required />
                    </div>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="signup-fullname" aria-describedby="emailHelp"
                            placeholder="Enter fullname" name="fullname" autocomplete="signin-fullname" required />
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="signup-password" placeholder="Enter password"
                            name="password" autocomplete="signin-password" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="signup-email" placeholder="Enter email" name="email" autocomplete="signin-email" required />
                    </div>
                    <button type="submit" id="signup-submit" class="btn btn__submit w-100 mt-3">ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
    </div>
</div>