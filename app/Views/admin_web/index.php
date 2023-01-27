<?= $this->extend('index'); ?>
<?= $this->section('page-content'); ?>

<?= $this->include('templates/title'); ?>

<div>
    <div class="m-2">
        <p>Dengan fitur ini desa dapat mengelola berita, widget, dan menu yang akan ditampilkan pada aplikasi MySID ini.</p>
    </div>

    <div class="">
        <div class="rounded-md shadow-md mb-2 p-1">
            <form id="form" method="post" enctype="multipart/form-data">

                <input class="w-full p-1 mb-2 border border-teal-500 rounded-md" type="file" name="gambar" id="gambar">

                <input class="w-full p-1 mb-2 border border-teal-500 rounded-md" type="text" name="nama" id="nama">

                <button id="btnSaveAgama" class="bg-teal-500 text-lg text-white font-medium py-1 rounded-md w-full" type="button">save</button>
            </form>
        </div>
    </div>

    <div class="rounded-md shadow-md mb-2 p-1">
        <div id="tableAgama">
            <?= $this->include('api/agama/table'); ?>
        </div>
    </div>
</div>
</div>

<script>
    // const formElement = document.querySelector("#form");
    // const btnSaveAgama = document.querySelector("#btnSaveAgama")
    // btnSaveAgama.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     const formData = new FormData(formElement);
    //     console.log(formData)
    //     const request = new XMLHttpRequest();
    //     request.open("POST", "/agama/addData");
    //     request.send(formData);
    // })
    $(document).ready(function() {
        $('#btnSaveAgama').click(function() {
            // alert('ok')
            const formData = new FormData($('#form'))
            alert(formData)
        })
        // $('#tableAgama').load('/agama/addData', formData);
    })
</script>

<?= $this->endSection(); ?>