const successAlert = (text) => {
  Swal.fire({
    icon: "success",
    title: "Sukses",
    text: text,
  });
};

const errorAlert = (text) => {
  Swal.fire({
    icon: "error",
    title: "Error",
    text: text,
  });
};

const warningAlert = (text) => {
  Swal.fire({
    icon: "warning",
    title: "Peringatan",
    text: text,
  });
};

const infoAlert = (text) => {
  Swal.fire({
    icon: "info",
    title: "Info",
    text: text,
  });
};

const questionAlert = (text, confirmed, calceled) => {
  Swal.fire({
    icon: "question",
    title: "konfirmasi",
    text: text,
    showCancelButton: true,
  }).then((result) => {
    if (result.isConfirmed) {
      confirmed();
    } else {
      calceled();
    }
  });
};
