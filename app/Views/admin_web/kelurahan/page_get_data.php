<?php for ($i = 0; $i < $totalHalaman; $i++) : ?>
    <button onclick="return pageGet(<?= $limit; ?>, <?= $i + 1; ?>)" class="px-1 mx-1 border rounded-sm border-teal-500 text-center focus:text-white focus:bg-teal-500" type="button"><?= $i + 1; ?></button>
<?php endfor ?>

<script>
    pageGet = (limit, halaman) => {
        $(document).ready(() => {
            const offset = (limit * halaman) - limit
            $('#table').load(`/kelurahan/getData/${limit}/${offset}`)
        })
    }
</script>