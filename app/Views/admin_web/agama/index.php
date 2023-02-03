<?= $this->extend('index'); ?>
<?= $this->section('page-content'); ?>

<?= $this->include('templates/title'); ?>

<div>
    <div class="">
        <div class="rounded-md shadow-md mb-2 p-1">
            <form id="form" method="post" enctype="multipart/form-data">
                <input class="w-full p-1 mb-2 border border-teal-500 rounded-md" type="text" name="agama" id="agama" placeholder="masukkan nama agama...">
                <button id="btnSave" class="bg-teal-500 text-lg text-white font-medium py-1 rounded-md w-full" type="submit">save</button>
            </form>
        </div>
    </div>
    <div class="flex flex-wrap justify-evenly">
        <div id="perPage" class="md:w-[30%]">
        </div>
        <div id="page" class="md:w-[30%]">
        </div>
        <div class="md:w-[30%]">
            <input class="w-full p-1 mb-2 border border-teal-500 rounded-md" type="text" id="cari" placeholder="kata kunci agama...">
        </div>
    </div>
    <div class="rounded-md shadow-md mb-2 p-1">
        <div id="table">
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {

        $.ajaxSetup({
            processData: false,
            contentType: false,
        })

        // load awal untuk tabel
        $('#table').load('/agama/getData/10/0')

        // load awal untuk page control
        $('#page').load('/agama/pageGetData/10')

        // load awal untuk per page
        $('#perPage').load('/agama/perPageGetData')

        // ajax saat tambah data
        $('#btnSave').click(function(e) {
            e.preventDefault()
            const formData = new FormData()
            formData.append('agama', $('#agama').val())
            $.post('/agama/addData', formData)
                .done(() => {
                    successAlert('agama berhasil ditambahkan')
                    $('#table').load('/agama/getData/10/0')
                    $('#page').load('/agama/pageGetData/10')
                    $('#agama').val('')
                })
                .fail(() => {
                    errorAlert('data gagal ditambahkan')
                })
        })

        $('#cari').keyup(() => {
            const key = $('#cari').val()
            if (key != '') {
                $('#table').load(`/agama/srchData/${key}/10/0`)
                $('#page').load(`/agama/pageSrchData/${key}/10`)
                $('#perPage').load(`/agama/perPageSrchData/${key}`)
            }
        })
    })
</script>

<?= $this->endSection(); ?>