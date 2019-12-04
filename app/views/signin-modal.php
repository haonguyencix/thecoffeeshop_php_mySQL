<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="signin-form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="signin-username" aria-describedby="emailHelp"
                            placeholder="Enter username" name="username" autocomplete="signin-username" />
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="signin-password" placeholder="Enter password"
                            name="password" autocomplete="signin-password" />
                    </div>
                    <button type="submit" id="signin-submit" class="btn btn__submit w-100 mt-3">ĐĂNG NHẬP</button>
                </form>
            </div>
        </div>
    </div>
</div>