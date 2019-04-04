<div class="row">
    <?php foreach ($data as $ps): ?>
        <div class="col-md-3 col-lg-4">
            <a href="<?= $this->url->get('prestashop/create/' . $ps->prestashopId) ?>">
                <div class="card-box text-center">
                    <img src="<?= $this->url->get('img/bot-logo.png') ?>" style="background-size: cover; width: 220px"
                         class="img-responsive" alt="">
                    <h2 class="m-t-20"><?= $ps->prestashopNama ?></h2>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>