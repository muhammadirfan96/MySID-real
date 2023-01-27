$(document).ready(function(){

    const flashDataWarning = $('.flash-data-warning').data('flashdata');
    const flashDataSuccess = $('.flash-data-success').data('flashdata');

    if (flashDataWarning) {
        Swal.fire({
            icon: 'warning',
            title: 'Warning',
            text: flashDataWarning
        });
    };

    if (flashDataSuccess) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: flashDataSuccess
        });
    };
});

// pakai post

function konfirmasi(id) {
    // alert('ok');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda akan menghapus permanen data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $('.'+id).submit();
        }
    });
}

// pakai get

function konfir(controller, method, data) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda akan menghapus permanen data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = '/' + controller + '/' + method + '/' + data;
        }
    });
}
