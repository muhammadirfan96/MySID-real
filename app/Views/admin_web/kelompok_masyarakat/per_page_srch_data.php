<select class="rounded-md border border-teal-500" id="perPageSrch" onchange="return perPageSrch('<?= $key; ?>')">
    <option value="5">5</option>
    <option selected value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
</select>

<script>
    perPageSrch = (key) => {
        $(document).ready(() => {
            const value = $('#perPageSrch').val()
            $('#table').load(`/kelompok_masyarakat/srchData/${key}/${value}/0`)
            $('#page').load(`/kelompok_masyarakat/pageSrchData/${key}/${value}`)
        })
    }
</script>