<?php
$arrKeranjang = [
    ['Redmi 4A 3/32', 1100000, 3, 'redmi4a.jpg', 'Hitam'],
    ['Redmi Note 8 4/64', 2200000, 1, 'redminote8.jpg', 'Hitam'],
    ['One Plus 3T 6/64', 2000000, 1, 'oneplus 3t.jpg', 'Silver'],
    ['Asus ROG Phone 3/128', 10500000, 1, 'rog phone.jpg', 'Hitam'],
];

$arrAlamatItem = [
    'Nama',
    'Nomor Telepon',
    'Kabupaten',
    'Kecamatan',
    'Desa',
    'Kode Pos',
    'Alamat Lengkap'
];

$arrAalamatIsi = [
    'Fairuz Minan Nafiz',
    '0812 4911 8805',
    'Gresik',
    'Panceng',
    'Wotan',
    '61156',
    'Jl Poros Desa Wotan RT 005 RW 002 Kec. Panceng Kab. Gresik'
];


?>

<div class="main">
    <div class="container">
        <div class="profile-saya">
            <div class="titleSection">
                <h4 class="title">Profile Saya : </h4>
            </div>
            <div class="card-alamat" id="divProduct">
                <div class="card-body">
                    <div class="card-body-alamat d-flex flex-row flex-wrap">
                        <?php foreach ($arrAlamatItem as $key => $item) { ?>
                            <div class="alamatItem">
                                <section class="labelAlamat">
                                    <?= $item ?>
                                </section>
                                <div class="fakeInput">
                                    <section class="fakeInputValue">
                                        <?= $arrAalamatIsi[$key] ?>
                                    </section>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-saya">
            <div class="titleSection">
                <h4 class="title">Riwayat Belanja : </h4>
            </div>
            <div class="card-alamat" id="divProduct">
                <div class="card-body">
                    <div class="card-body-alamat d-flex flex-row flex-wrap">
                        <!-- <?php foreach ($arrAlamatItem as $key => $item) { ?>
                            <div class="alamatItem">
                                <section class="labelAlamat">
                                    <?= $item ?>
                                </section>
                                <div class="fakeInput">
                                    <section class="fakeInputValue">
                                        <?= $arrAalamatIsi[$key] ?>
                                    </section>
                                </div>
                            </div>
                        <?php } ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>