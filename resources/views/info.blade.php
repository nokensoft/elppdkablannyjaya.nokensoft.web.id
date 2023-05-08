
<?php
    $host = request()->getHttpHost();
    // echo $host;

    if(!empty($host) && $host != 'silanny.lannyjayakab.id'){ ?>
<div class="bg-warning text-dark m-2 p-2 rounded">
    <small> <b class="d-block">Perhatian</b> Ini merupakan tampilan demo Sistem Informasi Pemerintahan Kabupaten Lanny Jaya. Untuk update data, silahkan kunjungi <a href="https://silanny.lannyjayakab.id" class="fw-bold btn btn-light" target="_blank">silanny.lannyjayakab.id</a></small>
</div>
<?php } ?>