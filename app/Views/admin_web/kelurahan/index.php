<?= $this->extend('index'); ?>
<?= $this->section('page-content'); ?>

<?= $this->include('templates/title'); ?>

<div>
    <div class="rounded-md shadow-md mb-3 p-1">
        <p class="p-1 mb-2 text-white bg-teal-500 rounded-md inline-block">tambah data kelurahan</p>
        <form id="form" method="post" enctype="multipart/form-data">
            <input class="peer w-full p-1 mb-2 outline-none border border-teal-500 rounded-md focus:invalid:border-red-700" type="text" name="kelurahan" id="kelurahan" autocomplete="off" placeholder="nama kelurahan..." required>

            <button class="peer-invalid:hidden bg-teal-500 text-lg text-white font-medium py-1 rounded-md w-full" type="submit">save</button>
        </form>
    </div>
    <div class="flex flex-wrap justify-evenly p-1">
        <div id="perPage" class="p-1 w-[30%]">
        </div>
        <div id="page" class="flex justify-center p-1 w-[30%] overflow-x-auto border border-teal-500 rounded-md">
        </div>
        <div class="p-1 w-[30%]">
            <input class="w-full p-1 outline-none focus:border-green-500 border border-teal-500 rounded-md" type="text" id="cari" autocomplete="off" autofocus placeholder="cari...">
        </div>
    </div>
    <div class="rounded-md shadow-md mb-2 p-1 overflow-auto">
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
        $('#table').load('/kelurahan/getData/10/0')

        // load awal untuk page control
        $('#page').load('/kelurahan/pageGetData/10')

        // load awal untuk per page
        $('#perPage').load('/kelurahan/perPageGetData')

        // ajax saat tambah data
        $('#form').submit(function(e) {
            e.preventDefault()
            const formData = new FormData()
            formData.append('kelurahan', $('#kelurahan').val())
            $.post('/kelurahan/addData', formData)
                .done(() => {
                    successAlert('kelurahan berhasil ditambahkan')
                    $('#table').load('/kelurahan/getData/10/0')
                    $('#page').load('/kelurahan/pageGetData/10')
                    $('#perPage').load('/kelurahan/perPageGetData')
                    $('#kelurahan').val('')
                })
                .fail(() => {
                    errorAlert('kelurahan gagal ditambahkan')
                })
        })

        $('#cari').keyup(() => {
            const key = $('#cari').val()
            if (key != '') {
                $('#table').load(`/kelurahan/srchData/${key}/10/0`)
                $('#page').load(`/kelurahan/pageSrchData/${key}/10`)
                $('#perPage').load(`/kelurahan/perPageSrchData/${key}`)
            }
        })
    })
</script>

<?= $this->endSection(); ?>