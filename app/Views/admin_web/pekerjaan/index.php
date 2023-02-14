<?= $this->extend('index'); ?>
<?= $this->section('page-content'); ?>

<?= $this->include('templates/title'); ?>

<div>
    <div class="rounded-md shadow-md mb-3 p-1">
        <p class="p-1 mb-2 text-white bg-teal-500 rounded-md inline-block">tambah data pekerjaan</p>
        <form id="form" method="post" enctype="multipart/form-data">
            <input class="peer w-full p-1 mb-2 outline-none border border-teal-500 rounded-md focus:invalid:border-red-700" type="text" name="pekerjaan" id="pekerjaan" autocomplete="off" placeholder="nama pekerjaan..." required>

            <input class="peer w-full p-1 mb-2 outline-none border border-teal-500 rounded-md focus:invalid:border-red-700" type="text" name="jenis" id="jenis" autocomplete="off" placeholder="jenis pekerjaan..." required>

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
        $('#table').load('/pekerjaan/getData/10/0')

        // load awal untuk page control
        $('#page').load('/pekerjaan/pageGetData/10')

        // load awal untuk per page
        $('#perPage').load('/pekerjaan/perPageGetData')

        // ajax saat tambah data
        $('#form').submit(function(e) {
            e.preventDefault()
            const formData = new FormData()
            formData.append('pekerjaan', $('#pekerjaan').val())
            formData.append('jenis', $('#jenis').val())
            $.post('/pekerjaan/addData', formData)
                .done(() => {
                    successAlert('pekerjaan berhasil ditambahkan')
                    $('#table').load('/pekerjaan/getData/10/0')
                    $('#page').load('/pekerjaan/pageGetData/10')
                    $('#perPage').load('/pekerjaan/perPageGetData')
                    $('#pekerjaan').val('')
                    $('#jenis').val('')
                })
                .fail(() => {
                    errorAlert('pekerjaan gagal ditambahkan')
                })
        })

        $('#cari').keyup(() => {
            const key = $('#cari').val()
            if (key != '') {
                $('#table').load(`/pekerjaan/srchData/${key}/10/0`)
                $('#page').load(`/pekerjaan/pageSrchData/${key}/10`)
                $('#perPage').load(`/pekerjaan/perPageSrchData/${key}`)
            }
        })
    })
</script>

<?= $this->endSection(); ?>