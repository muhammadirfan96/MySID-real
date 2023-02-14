<table cellpadding="5" class="w-full">
    <tr class="bg-cyan-100 p-1 border-b-2">
        <th>no</th>
        <th class="w-[1%]">action</th>
        <th>kelurahan</th>
        <th>waktu input</th>
        <th>waktu update</th>
        <th>diinput oleh</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($kelurahan as $key => $value) : ?>
        <tr class="border-b-2">
            <td><?= $i; ?></td>
            <td>
                <button class="px-3 py-1 rounded-sm w-full mb-1 text-sm italic bg-green-300" type="button" onclick="return edit(<?= $value['id']; ?>)">edit</button>
                <button class="px-3 py-1 rounded-sm w-full text-sm italic bg-red-300" type="button" onclick="return hapus(<?= $value['id']; ?>)">delete</button>
            </td>
            <td><?= $value['kelurahan']; ?></td>
            <td><?= $value['waktu_input']; ?></td>
            <td><?= $value['waktu_update']; ?></td>
            <td><?= $value['diinput_oleh']; ?></td>
        </tr>
        <div id="modal<?= $value['id']; ?>" class="fixed hidden top-0 bottom-0 right-0 left-0 bg-slate-900 bg-opacity-50 z-10 p-2 md:p-60">
            <div class="bg-white rounded-md p-4 relative">
                <button onclick="return btnCloseModal(<?= $value['id']; ?>)" class="absolute right-1 top-0" type="button"><i class="bi-x-square-fill text-red-700 rounded-md text-xl"></i></button>

                <p class="text-center font-medium text-lg">Edit Nama Kelurahan</p>
                <form method="post" class="mt-2">

                    <input class="peer w-full p-1 mb-2 outline-none border border-teal-500 rounded-md focus:invalid:border-red-700" type="text" name="kelurahanEdit<?= $value['id']; ?>" id="kelurahanEdit<?= $value['id']; ?>" placeholder="masukkan nama kelurahan..." value="<?= $value['kelurahan']; ?>" required>

                    <button onclick="return btnEdit(<?= $value['id']; ?>)" class="peer-invalid:hidden bg-teal-500 text-lg text-white font-medium py-1 rounded-md w-full" type="button">save</button>

                </form>
            </div>
        </div>
        <?php $i++ ?>
    <?php endforeach ?>
</table>

<script>
    $(document).ready(() => {
        edit = (id) => {
            $('#modal' + id).removeClass('hidden')
        }

        hapus = (id) => {
            questionAlert('yakin untuk menghapus data ini ?', () => {
                $.ajax({
                    url: `/kelurahan/deleteData/${id}`,
                    method: 'delete'
                }).done(() => {
                    successAlert('kelurahan berhasil dihapus')
                    $('#table').load('/kelurahan/getData/10/0')
                    $('#page').load('/kelurahan/pageGetData/10')
                }).fail(() => {
                    errorAlert('kelurahan gagal dihapus')
                })
            }, () => {
                infoAlert('kelurahan tidak dihapus')
            })
        }

        btnEdit = (id) => {
            const formData = new FormData()
            formData.append('id', id)
            formData.append('kelurahanEdit', $('#kelurahanEdit' + id).val())
            $.post('/kelurahan/editData/', formData)
                .done(() => {
                    successAlert('kelurahan berhasil diedit')
                    $('#table').load('/kelurahan/getData/10/0')
                    $('#page').load('/kelurahan/pageGetData/10')
                    $('#modal' + id).addClass('hidden')
                })
                .fail(() => {
                    errorAlert('kelurahan gagal diedit')
                })
        }

        btnCloseModal = (id) => {
            $('#modal' + id).addClass('hidden')
        }
    })
</script>