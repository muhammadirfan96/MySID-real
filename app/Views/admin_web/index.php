<?= $this->extend('index'); ?>
<?= $this->section('page-content'); ?>

<?= $this->include('templates/title'); ?>

<div>
    <div class="m-2">
        <p>Dengan fitur ini desa dapat mengelola berita, widget, dan menu yang akan ditampilkan pada aplikasi MySID ini.</p>
    </div>

    <div>
        <a href="/adm_bantuan" class="p-2 m-1">bantuan</a>
        <a href="/adm_kabupaten" class="p-2 m-1">kabupaten</a>
        <a href="/adm_provinsi" class="p-2 m-1">provinsi</a>
        <a href="/adm_kecamatan" class="p-2 m-1">kecamatan</a>
        <a href="/adm_kelurahan" class="p-2 m-1">kelurahan</a>
        <a href="/adm_pendidikan" class="p-2 m-1">pendidikan</a>
        <a href="/adm_pekerjaan" class="p-2 m-1">pekerjaan</a>
        <a href="/adm_kelompok_masyarakat" class="p-2 m-1">kelompok masyarakat</a>
        <a href="/adm_data_kelompok_masyarakat" class="p-2 m-1">data kelompok masyarakat</a>
        <a href="/adm_data_bantuan" class="p-2 m-1">data bantuan</a>
        <a href="/adm_data_penduduk" class="p-2 m-1">data penduduk</a>
    </div>
</div>
</div>

<?= $this->endSection(); ?>