<table cellpadding="5" class="w-full">
    <tr class="bg-cyan-100 p-1 border-b-2">
        <th>no</th>
        <th>action</th>
        <th>agama</th>
        <th>waktu input</th>
        <th>waktu update</th>
        <th>diinput oleh</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($agama as $key => $value) : ?>
        <tr class="border-b-2">
            <td><?= $i; ?></td>
            <td>
                <button class="px-3 py-1 rounded-sm text-sm italic bg-green-300" type="button" onclick="return edit(<?= $value['id']; ?>)">edit</button>
                <button class="px-3 py-1 rounded-sm text-sm italic bg-red-300" type="button" onclick="return hapus(<?= $value['id']; ?>)">delete</button>
            </td>
            <td><?= $value['agama']; ?></td>
            <td><?= $value['waktu_input']; ?></td>
            <td><?= $value['waktu_update']; ?></td>
            <td><?= $value['diinput_oleh']; ?></td>
        </tr>
        <div id="modal<?= $value['id']; ?>" class="fixed hidden top-0 bottom-0 right-0 left-0 bg-slate-900 bg-opacity-50 z-10 p-2 md:p-60">
            <div class="bg-white rounded-md p-4 relative">
                <button onclick="return btnCloseModal(<?= $value['id']; ?>)" class="absolute right-1 top-0" type="button"><i class="bi-x-square-fill text-red-700 rounded-md shadow-md text-xl"></i></button>
                <p class="text-center font-medium text-lg">Edit Nama Agama</p>
                <form method="post" class="mt-2">
                    <input class="w-full p-1 mb-2 border border-teal-500 rounded-md" type="text" name="agamaEdit<?= $value['id']; ?>" id="agamaEdit<?= $value['id']; ?>" value="<?= $value['agama']; ?>">
                    <button onclick="return btnEdit(<?= $value['id']; ?>)" class="bg-teal-500 text-lg text-white font-medium py-1 rounded-md w-full" type="button">save</button>
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
                    url: `/agama/deleteData/${id}`,
                    method: 'delete'
                }).done(() => {
                    successAlert('agama berhasil dihapus')
                    $('#table').load('/agama/getData/10/0')
                    $('#page').load('/agama/pageGetData/10')
                }).fail(() => {
                    errorAlert('data gagal dihapus')
                })
            }, () => {
                infoAlert('agama tidak dihapus')
            })
        }

        btnEdit = (id) => {
            const formData = new FormData()
            formData.append('id', id)
            formData.append('agamaEdit', $('#agamaEdit' + id).val())
            $.post('/agama/editData/', formData)
                .done(() => {
                    successAlert('agama berhasil diedit')
                    $('#table').load('/agama/getData/10/0')
                    $('#page').load('/agama/pageGetData/10')
                    $('#modal' + id).addClass('hidden')
                })
                .fail(() => {
                    errorAlert('data gagal diedit')
                })
        }

        btnCloseModal = (id) => {
            $('#modal' + id).addClass('hidden')
        }
    })
</script>