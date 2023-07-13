<?php require_once('../layouts/header.php'); ?>
<?php require_once('../layouts/nav.php'); ?>
<div class="ta-content">
    <div class="shop-profile">
        <?php require_once('../layouts/avatar.php'); ?>
        <div class="ta-container pt-3">
            <div class="shop-navigation">
                <div class="row gx-sm-3 gx-2">
                    <div class="col-4">
                        <div class="profile-navigation home"><a href="/" class="" aria-current="page"><i
                                    class="fad fa-home"></i> <span class="text">Cá nhân</span></a></div>
                    </div>
                    <div class="col-4">
                        <div class="profile-navigation review active"><a href="/banking"
                                class="nuxt-link-exact-active nuxt-link-active"><i class="fad fa-star"></i> <span
                                    class="text">Thanh toán</span></a></div>
                    </div>
                    <div class="col-4">
                        <div class="profile-navigation community"><a href="/demo" class=""><i
                                    class="fad fa-flag"></i> <span class="text">Cộng đồng</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ta-content">
            <div class="ta-content">
                <div class="ta-container py-3 pb-sm-4 pt-sm-3">
                    <div>
                        <h2 class="page-title">Chuyển khoản tài khoản</h2>
                        <div class="row flex-row-reverse">
                            <div class="col-lg-12">
                                <div
                                    class="ta-transfer-content text-center bg-light py-2 px-3 rounded border-dashed mb-3">
                                    <div class="fs-13 text-muted">Nội dung chuyển khoản: </div>
                                    <p class="mb-0 fs-18">
                                        <strong>Ủng hộ bảo dz</strong>
                                        <i class="fad text-primary cursor-pointer fa-clone"
                                            onclick="copy('Ủng hộ bảo dz')"></i>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="payment mb-3 bg-white rounded border shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon position-relative"><img alt="nap tien trumacc qua MB"
                                                        title="MB" class="shadow-sm border border-gray"
                                                        src="https://cdn.hassbase.com/storages/bank/icon/mb.png">
                                                    <button class="btn btn-main btn-qr mt-1 w-100 fs-10"
                                                        data-bs-toggle="modal" data-bs-target="#mbbank1"><i
                                                            class="fal fa-qrcode"></i> QR-Code
                                                    </button>
                                                </div>
                                                <div class="info ps-3">
                                                    <div class="bank fs-14 text-muted">
                                                        Chuyển khoản MB
                                                    </div>
                                                    <div class="number fs-17"><strong>100000001</strong> <i
                                                            class="fad text-primary cursor-pointer fa-clone"
                                                            onclick="copy('100000001')"></i></div>
                                                    <div class="name fs-15">
                                                        NGUYEN DINH BAO
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="payment mb-3 bg-white rounded border shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon position-relative"><img alt="nap tien trumacc qua MB"
                                                        title="MB" class="shadow-sm border border-gray"
                                                        src="https://cdn.hassbase.com/storages/bank/icon/mb.png">
                                                    <button class="btn btn-main btn-qr mt-1 w-100 fs-10"
                                                        data-bs-toggle="modal" data-bs-target="#mbbank"><i
                                                            class="fal fa-qrcode"></i> QR-Code
                                                    </button>
                                                </div>
                                                <div class="info ps-3">
                                                    <div class="bank fs-14 text-muted">
                                                        Chuyển khoản MB
                                                    </div>
                                                    <div class="number fs-17"><strong>100000101</strong> <i
                                                            class="fad text-primary cursor-pointer fa-clone"
                                                            onclick="copy('100000101')"></i></div>
                                                    <div class="name fs-15">
                                                        NGUYEN DINH BAO
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="payment mb-3 bg-white rounded border shadow-sm p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon position-relative"><img alt="nap tien trumacc qua Momo"
                                                        title="Momo" class="shadow-sm border border-gray"
                                                        src="https://cdn.hassbase.com/storages/bank/icon/momo.png">
                                                    <button class="btn btn-main btn-qr mt-1 w-100 fs-10"
                                                        data-bs-toggle="modal" data-bs-target="#momo"><i
                                                            class="fal fa-qrcode"></i> QR-Code
                                                    </button>
                                                    <!---->
                                                </div>
                                                <div class="info ps-3">
                                                    <div class="bank fs-14 text-muted">
                                                        Chuyển khoản Momo
                                                    </div>
                                                    <div class="number fs-17"><strong>0935974907</strong> <i
                                                            class="fad text-primary cursor-pointer fa-clone"
                                                            onclick="copy('0935974907')"></i></div>
                                                    <div class="name fs-15">
                                                        Nguyễn Đình Bảo
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6">
                            <div class="payment mb-3 bg-white rounded border shadow-sm p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon position-relative"><img alt="nap tien trumacc qua Thẻ Siêu Rẻ" title="Thẻ Siêu Rẻ" class="shadow-sm border border-gray" src="https://cdn.hassbase.com/storages/bank/icon/thesieure.png">
                                        
                                    </div>
                                    <div class="info ps-3">
                                        <div class="bank fs-14 text-muted">
                                            Chuyển khoản Thẻ Siêu Rẻ
                                        </div>
                                        <div class="number fs-17"><strong>hoanghjx</strong> <i class="fad text-primary cursor-pointer fa-clone"></i></div>
                                        <div class="name fs-15">
                                            Nguyễn Ngọc Hoàng
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="modal fade" id="vcb" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button"
                                    data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded"
                                        src="https://img.vietqr.io/image/VCB-0431000259709-compact2.png?amount=50000&amp;accountName=NGUYEN+NGOC+HOANG&amp;addInfo=tavn72">
                                </div>
                                <div class="alert alert-primary">
                                    Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                    lập sẵn
                                    thông tin
                                    cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong, từ 1 -
                                    15 phút sẽ
                                    cộng tiền
                                    vào tài khoản.
                                </div> <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-main w-100">Đóng</button>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="mbbank1" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button"
                                    data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded"
                                        src="https://img.vietqr.io/image/MB-100000001-compact2.png?amount=1000&amp;accountName=NGUYEN+DINH+Bao&amp;addInfo=Ủng hộ bảo dz">
                                </div>
                                <div class="alert alert-primary">
                                    Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                    lập sẵn
                                    thông tin
                                    cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong
                                </div> <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-main w-100">Đóng</button>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="mbbank" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button"
                                    data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded"
                                        src="https://img.vietqr.io/image/MB-100000001-compact2.png?amount=1000&amp;accountName=NGUYEN+DINH+Bao&amp;addInfo=Ủng hộ bảo dz">
                                </div>
                                <div class="alert alert-primary">
                                    Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                    lập sẵn
                                    thông tin
                                    cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong
                                </div> <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-main w-100">Đóng</button>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="momo" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold">Quét mã QR</h5> <button type="button"
                                    data-bs-dismiss="modal" aria-label="Close" class="btn-close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img height="320" alt="" class="mw-100 ta-lz-load ta-lz-loaded"
                                        src="https://momosv3.apimienphi.com/api/QRCode?phone=0935974907&note=%E1%BB%A6ng%20h%E1%BB%99%20b%E1%BA%A3o%20dz&amount=1000">
                                </div>
                                <div class="alert alert-primary">
                                    Vào App của ngân hàng, tìm đến phần quét mã QR-Code để thanh toán, hệ thống đã thiết
                                    lập sẵn
                                    thông tin
                                    cũng như nội dung chuyển khoản, chỉ cần quét mã và xác nhận chuyển là xong
                                </div> <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-main w-100">Đóng</button>
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('../layouts/footer.php'); ?>