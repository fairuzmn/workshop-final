<?php

$arrKeranjang = [
    ['Redmi 4A 3/32', 1100000, 3, 'redmi4a.jpg', 'Hitam'],
    ['Redmi Note 8 4/64', 2200000, 1, 'redminote8.jpg', 'Hitam'],
    ['One Plus 3T 6/64', 2000000, 1, 'oneplus 3t.jpg', 'Silver'],
    ['Asus ROG Phone 3/128', 10500000, 1, 'rog phone.jpg', 'Hitam'],
]

?>

<div class="main">
    <div class="container">
        <div class="titleSection">
            <h4 class="title">Keranjang Belanja Kamu</h4>
        </div>
        <div class="card-columns d-flex flex-row">
            <?php foreach ($arrKeranjang as $index => $item) { ?>
                <div class="card-keranjang" id="divProduct">
                    <div class="card-body">
                        <div class="cardFLex">
                            <div class="card-img-keranjang">
                                <img src="img/<?= $item[3] ?>" alt="" height="200px" width="200px">
                            </div>
                            <div class="detailItemKeranjang">
                                <div class="itemKeranjang">
                                    <section class="namaHpKeranjang">
                                        <?= $item[0] ?>
                                        <br>
                                        Warna : <?= $item[4] ?>
                                    </section>
                                </div>
                                <div class="itemKeranjang">
                                    <input type="hidden" id="hargaItem<?= $index ?>" value="<?= $item[1] ?>">
                                    <section class="subtotalKeranjang">
                                        Subtotal : <span id="rupiah<?= $index ?>"><?= Rupiah($item[1] * $item[2])  ?></span>
                                    </section>
                                </div>
                                <div class="itemKeranjang ">
                                    <button class="btn btn-successv2" onclick="addQty('inputQuantity<?= $index ?>',<?= $index ?>)">
                                        <i data-feather="plus" style="height:18px;color:white"></i>
                                    </button>
                                    <input type="text" class="inputQuantity" id="inputQuantity<?= $index ?>" value="<?= $item[2] ?>" readonly>
                                    <button class="btn btn-info" onclick="remQty('inputQuantity<?= $index ?>',<?= $index ?>)">
                                        <i data-feather="minus" style="height:18px;color:white"></i>
                                    </button>
                                    <button class="btn btn-danger">
                                        <i data-feather="trash-2" style="height:18px"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="titleSection">
            <h4 class="title">Alamat Pengiriman : </h4>
        </div>
    </div>
</div>
<script>
    const addQty = (idInputFull, id) => {
        const hargaItem = $(`#hargaItem${id}`).val();
        const number = Number($(`#${idInputFull}`).val()) + 1;
        $(`#${idInputFull}`).val(number)
        $(`#rupiah${id}`).text(convertToRupiah(hargaItem * number));
    }

    const remQty = (idInputFull, id) => {
        const hargaItem = $(`#hargaItem${id}`).val();
        const number = Number($(`#${idInputFull}`).val()) - 1;
        if (number > 0) {
            $(`#${idInputFull}`).val(number)
            $(`#rupiah${id}`).text(convertToRupiah(hargaItem * number))
        }
    }

    const convertToRupiah = (angka) => {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++)
            if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
        return 'Rp ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }
</script>