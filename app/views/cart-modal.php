<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đặt hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" action="">
                <form>
                    <div id="modalContainer" class="modal__container"></div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <span class="mr-2">Số lượng:</span>
                            <button type="button" id="btnDecrease" class="btn btn__quantity btn__minus">
                                -
                            </button>
                            <span id="quantity" class="mx-1">
                                1
                            </span>
                            <button type="button" id="btnIncrease" class="btn btn__quantity">
                                +
                            </button>
                        </div>
                        <div>
                            Thành tiền: <span id="productTotal"></span> VND
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="notes">Ghi chú: </label>
                        <textarea type="text" class="form-control" placeholder="Ghi chú ở đây" name="notes"
                            autocomplete="notes" rows="3">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn__submit w-100 mt-3" id="addCart">THÊM VÀO GIỎ</button>
                </form>
            </div>
        </div>
    </div>
</div>