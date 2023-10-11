"use strict";

const flashData = $(".flash-data").data("flashdata");
if (flashData) {
  Swal.fire({
    position: "top-end",
    icon: "success",
    title : 'Data ' + flashData,
    showConfirmButton: false,
    timer: 1000,
  });
}

$(".btn-hapus").on("click", function (e) {
  e.preventDefault();
  var href = $(this).attr("href");
  Swal.fire({
    title: "Yakin ingin hapus data?",
    text: "Data akan dihapus permanen!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, hapus!",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

$("#AlertaEliminarCliente1").on("click", function (e) {
  e.preventDefault();
  var href = $(this).attr("href");
  swal({
    title: "Yakin Ingin Hapus Data ?",
    text: "Data tidak akan bisa kembali",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    cancelButtonText: "Cancel",
    confirmButtonClass: "btn-danger",
    closeOnConfirm: false,
    closeOnCancel: false,
  }).then((result) => {
    if (result.value) {
      swal("Berhasil DiHapus", "Data Berhasil DiHapus", "success");
      setTimeout(function () {
        document.location.href = href;
      }, 1000);
    } else {
      swal("Cancel", "Data Gagal DiHapus", "error");
    }
  });
});

$("#AlertaEliminarCliente").on("click", function (e) {
  e.preventDefault();
  var href = $(this).attr("href");
  swal({
    title: "Yakin Ingin Hapus Data ?",
    text: "Data tidak akan bisa kembali",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Hapus",
    cancelButtonText: "Cancel",
    confirmButtonClass: "btn-danger",
    closeOnConfirm: false,
    closeOnCancel: false,
  }).then((result) => {
    if (result.value) {
      swal("Berhasil DiHapus", "Data Berhasil DiHapus", "success");
      setTimeout(function () {
        document.location.href = href;
      }, 1000);
    } else {
      swal("Cancel", "Data Gagal DiHapus", "error");
    }
  });
});
