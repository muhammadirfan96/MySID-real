<?php for ($i = 0; $i < $totalHalaman; $i++) : ?>
    <button onclick="return pageGet(<?= $limit; ?>, <?= $i + 1; ?>)" class="px-1 border border-cyan-100 text-center" type="button"><?= $i + 1; ?></button>
<?php endfor ?>

<script>
    pageGet = (limit, halaman) => {
        $(document).ready(() => {
            const offset = (limit * halaman) - limit
            $('#table').load(`/agama/getData/${limit}/${offset}`)
        })
    }
</script>