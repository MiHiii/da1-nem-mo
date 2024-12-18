<?php include_once ROOT_DIR . "views/client/header.php" ?>

<?php if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
} ?>

<div class="container">
    <div class="row h-100">
        <div class="col mt-3 m-2">
            <nav aria-label="breadcrumb" class="bg-light p-3 rounded">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="<?= ROOT_URL ?>" class="text-decoration-none text-primary">Trang chủ</a>
                    </li>
                    <span style='margin: 0 10px;'> / </span>
                    <li class=""><a href="<?= ROOT_URL . "?ctl=category&id=" . $category['id']; ?>" style="color: #565656"><?= $category['cate_name'] ?></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-2">
            <img src="<?= ROOT_URL . $product['image'] ?>" alt="Sản phẩm" class="card-img-top border border-primary rounded" style="height: 550px;">
            <div class="card-body">
                <p class="card-text text-center text-muted"><?= $product["name"] ?></p>
            </div>
        </div>

        <div class="col-md-6 card mb-4 shadow-sm p-7">
            <h3 class="mb-3 text-primary font-weight-bold"><?= $product["name"] ?></h3>
            <div class="rating mb-3">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-alt"></i>
                <i class="fa fa-star-o"></i>
                <span class="text-muted">(4.5 trên 5 sao)</span>
            </div>

            <h4 class="product-price mb-3"><?= number_format($product['price'], 0, ',', '.') ?> VND</h4>

            <!-- Mô tả sản phẩm -->
            <p class="text-secondary mb-4"><?= $product["description"] ?></p>

            <!-- Tùy chọn số lượng và nút giỏ hàng -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <div class="input-group">
                    <button class="btn btn-outline-secondary" type="button" id="decreaseQuantity">-</button>
                    <input type="number" id="quantity" class="form-control text-center" value="1" min="1" style="max-width: 70px;">
                    <button class="btn btn-outline-secondary" type="button" id="increaseQuantity">+</button>
                </div>

                <div class="d-flex gap-5">
                    <a href="<?= isset($_SESSION['user_id']) ? ROOT_URL . '?ctl=add-cart&id=' . $product['id'] : '#' ?>"
                        class="btn btn-outline-danger btn-add-cart mt-3"
                        <?= !isset($_SESSION['user_id']) ? 'data-bs-toggle="modal" data-bs-target="#authModal"' : '' ?>>Thêm vào giỏ hàng</a>
                    <a
                        href="<?= isset($_SESSION['user_id']) ? ROOT_URL . '?ctl=payCart&id=' . $product['id'] : '#' ?>"
                        class="btn btn-danger mt-3"
                        <?= !isset($_SESSION['user_id']) ? 'data-bs-toggle="modal" data-bs-target="#authModal"' : '' ?>>
                        Mua Ngay
                    </a>
                    <a href="?ctl=contact"><button class="btn btn-danger mt-3">Liên Hệ Ngay</button></a>
                </div>
            </div>

            <div class="card shadow-sm mt-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0 text-success">Thông Tin Bổ Sung</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Thương hiệu:</strong> Thương hiệu A
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Chất liệu:</strong> Vải cao cấp
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Xuất xứ:</strong> Việt Nam
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Mô tả chi tiết sản phẩm -->
    <div class="container my-5">
        <h4 class="mb-4 text-primary border-bottom pb-2">Mô Tả Chi Tiết</h4>
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0 text-success">1. Tổng Quan Sản Phẩm</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Nệm cao su đa tầng Goodnight Rena là sản phẩm cao cấp, được thiết kế nhằm mang lại giấc ngủ thoải mái và chất lượng nhất cho người dùng.
                    Với độ dày 10cm, sản phẩm là sự kết hợp hoàn hảo giữa các vật liệu cao cấp như cao su thiên nhiên và foam đàn hồi, đáp ứng nhu cầu sử dụng đa dạng
                    của người tiêu dùng hiện đại.
                </p>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0 text-success">2. Đặc Điểm Nổi Bật</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Độ dày lý tưởng:</b> Độ dày 10cm giúp nâng đỡ cơ thể một cách hoàn hảo, giảm thiểu áp lực lên cột sống và các khớp.</li>
                    <li class="list-group-item"><b>Thiết kế đa tầng:</b> Kết hợp giữa cao su thiên nhiên và foam đàn hồi, đảm bảo sự cân bằng giữa độ êm ái và độ vững chắc.</li>
                    <li class="list-group-item"><b>Thông thoáng tối ưu:</b> Lớp cao su thiên nhiên có khả năng thoát khí tốt, hạn chế tích nhiệt, mang lại cảm giác mát mẻ khi nằm.</li>
                    <li class="list-group-item"><b>Vỏ ngoài tiện lợi:</b> Vỏ bọc dễ tháo rời, vệ sinh đơn giản, giúp giữ nệm luôn sạch sẽ và bền đẹp.</li>
                </ul>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0 text-success">3. Lợi Ích Khi Sử Dụng</h5>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Khi sử dụng nệm Goodnight Rena, bạn sẽ cảm nhận được sự khác biệt rõ rệt về chất lượng giấc ngủ:
                </p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item"><b>Cải thiện sức khỏe:</b> Nệm hỗ trợ giữ cột sống thẳng tự nhiên, giúp giảm đau lưng và ngăn ngừa các vấn đề về xương khớp.</li>
                    <li class="list-group-item"><b>Ngủ ngon hơn:</b> Độ êm ái và khả năng cách ly chuyển động tốt giúp bạn có giấc ngủ sâu, không bị ảnh hưởng khi người khác di chuyển.</li>
                    <li class="list-group-item"><b>Phù hợp với nhiều điều kiện thời tiết:</b> Chất liệu thông thoáng giúp bạn thoải mái cả mùa đông lẫn mùa hè.</li>
                </ol>
            </div>
        </div>
        <div class="mb-4 text-center">
            <img src="https://270349907.e.cdneverest.net/fast/544x0/filters:format(webp)/vuanem.com/storage/products/1866/RERZ79aLbP38qtiWvsMLBbAMRA54xvGM5t4NPK7d.jpg" class="card-img-top img-fluid" alt="Nệm cao su đa tầng Goodnight Rena" style="width: 700px; height: 500px;">
            <div class="card-body">
                <p class="card-text text-center text-muted">Nệm cao su đa tầng Goodnight Rena.</p>
            </div>
        </div>
    </div>

    <div class="card mb-4 shadow-sm my-5 p-3">
        <h4 class="card-header bg-light">Đánh Giá Sản Phẩm</h4>
        <?php if (empty($comments)) : ?>
            <p class="text-center text-muted">Chưa có đánh giá nào cho sản phẩm này</p>
        <?php else: ?>
            <?php foreach ($comments as $comment): ?>
                <?php
                $user = (new User)->find($comment['user_id']);
                $username = $user['fullname'];
                $userImage = ROOT_URL . $user['image'];
                ?>
                <div class="review-card mb-3 d-flex align-items-start p-3">
                    <img src="<?= htmlspecialchars($userImage) ?>" alt="Avatar" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                    <div>
                        <p><strong><?= htmlspecialchars($username) ?></strong> <span class="text-muted">- <?= date('d/m/Y', strtotime($comment['created_at'])) ?></span></p>
                        <p><?= htmlspecialchars($comment['comment']) ?></p>
                        <div class="rating">
                            <?php for ($i = 1; $i <= $comment['rating']; $i++): ?>
                                <span class="star filled">&#9733;</span>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="mt-4">
            <?php if (!empty($_SESSION['error_message_comment'])): ?>
                <div id="error-message" class="alert alert-danger alert-dismissible fade show p-2 small ">
                    <?= $_SESSION['error_message_comment']; ?>
                </div>
                <?php unset($_SESSION['error_message_comment']); ?>
            <?php endif; ?>
            <h5>Viết Đánh Giá Của Bạn</h5>
            <form id="commentForm" action="?ctl=add-comment" method="POST">
                <div class="mb-3">
                    <label for="rating" class="form-label">Chọn số sao</label>
                    <div id="rating" class="rating">
                        <input type="radio" id="star5" name="rating" value="5" checked />
                        <label for="star5" title="5 stars">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label for="star4" title="4 stars">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label for="star3" title="3 stars">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label for="star2" title="2 stars">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label for="star1" title="1 star">&#9733;</label>
                    </div>
                </div>
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <div class="mb-3">
                    <label for="comment" class="form-label">Bình luận</label>
                    <textarea id="comment" name="comment" class="form-control" rows="3" placeholder="Viết đánh giá của bạn ở đây" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi Đánh Giá</button>
            </form>
        </div>
    </div>

    <!-- Sản phẩm liên quan -->
    <div class="related-products my-5">
        <h4>Sản Phẩm Liên Quan</h4>
        <div class="row">
            <?php foreach ($relatedProducts as $product): ?>
                <div class="col-md-3 mb-4">
                    <div class="card shadow-sm">
                        <a style="height: 200px" href="<?= ROOT_URL . "?ctl=detail&id=" . $product['id']; ?>">
                            <img
                                src="<?= ROOT_URL . $product['image']; ?>"
                                class="card-img-top"
                                alt="<?= htmlspecialchars($product['name']); ?>"
                                style=" height: 200px;  object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <a href="<?= ROOT_URL . "?ctl=detail&id=" . $product['id']; ?>">
                                <h5 class="card-title text-truncate"><?= $product['name']; ?></h5>
                            </a>
                            <p class="card-text text-muted">
                                Giá: <strong><?= number_format($product['price'], 0, ',', '.'); ?> VND</strong>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="<?= ROOT_URL . "?ctl=detail&id=" . $product['id']; ?>" class="btn btn-outline-primary btn-sm">
                                    Xem chi tiết
                                </a>
                                <a href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>" class="btn btn-outline-danger btn-sm">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    // Lấy các phần tử
    const decreaseButton = document.getElementById('decreaseQuantity');
    const increaseButton = document.getElementById('increaseQuantity');
    const quantityInput = document.getElementById('quantity');

    // Xử lý giảm số lượng
    decreaseButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    // Xử lý tăng số lượng
    increaseButton.addEventListener('click', () => {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    // Đảm bảo người dùng không nhập số không hợp lệ
    quantityInput.addEventListener('input', () => {
        if (quantityInput.value === '' || parseInt(quantityInput.value) < 1) {
            quantityInput.value = 1;
        }
    });
</script>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>