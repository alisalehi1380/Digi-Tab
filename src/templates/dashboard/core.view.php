<div class='wrapper'>
    <form method="POST">
        <div class='alert'>
            <?= $message ?>
        </div>
        <div class='items'>
            <div class="item">
                <label>لایسنس ژاکت‌: </label>
                <input class="input-licence" type="text" value="<?= get_option('order_list_key') ?>" name="active" id="active">
            </div>
            <div class="item">
                <input type="submit" name="submit-form" class="tab1-btn" value="فعال سازی افزونه">
            </div>
        </div>
    </form>
</div>