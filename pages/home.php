<div class="main">
    <div class="container">
        <div class="titleSection">
            <h4 class="title">Rekomendasi Untuk Kamu</h4>
        </div>
        <div class="card-columns">
            <?php foreach ($produk as $item) { ?>
                <div class="card" id="divProduct">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="img/<?= $item[2] ?>" alt="" height="200px" width="200px">
                        </div>
                        <div class="card-title">
                            <section class="section-title">
                                <?= $item[0] ?>
                            </section>
                        </div>
                        <div class="card-price">
                            <section class="section-price">
                                <?= Rupiah($item[1]) ?>
                            </section>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="pagination-section">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
</div>