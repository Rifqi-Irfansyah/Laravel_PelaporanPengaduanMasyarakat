<!-- Pop Up in Pages Report -->
<!-- POP UP VALIDATE SEND REPORT -->
<script>
const form = document.querySelector('form');
if (form) {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        Swal.fire({
            title: 'Yakin, Ingin Mengirim Laporan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: ' Yes ',
            cancelButtonText: ' No ',
            customClass: {
                popup: 'background',
                confirmButton: 'btn-confirm',
                cancelButton: 'btn-cancel',
                title: 'title',
            }
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    })
}

// POP UP VALIDATE CREATE ACCOUNT OFFICER
const formCreateAccount = document.querySelector('#form-create-account');
if (formCreateAccount) {
    formCreateAccount.addEventListener('submit', (event) => {
        event.preventDefault();
        Swal.fire({
            title: 'Yakin, Ingin Menambahkan Akun Petugas?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: ' Yes ',
            cancelButtonText: ' No ',
            customClass: {
                popup: 'background',
                confirmButton: 'btn-confirm',
                cancelButton: 'btn-cancel',
                title: 'title',
            }
        }).then((result) => {
            if (result.isConfirmed) {
                formCreateAccount.submit();
            }
        })
    })
}

// Pop Up Error Validate Report
@if($errors -> any())
Swal.fire({
    icon: 'error',
    title: 'Gagal Mengirim',
    html: '@foreach ($errors->all() as $error)<li class="text-md leading-5 text-sm text-left font-bold">{{ $error }}</li>@endforeach',
    confirmButtonText: ' Yes ',
    customClass: {
        popup: 'background',
        confirmButton: 'btn-confirm',
        title: 'title',
    }
})
@endif

//  Pop Up Success Send Report
@if(session('success_sendreport'))
Swal.fire({
    icon: 'success',
    title: 'Laporan Berhasil Dikirim',
    timer: 2500,
    timerProgressBar: true,
    showConfirmButton: false,
    customClass: {
        popup: 'background',
        title: 'title',
    }
})
@endif

//  Pop Up Success Create Account Officer
@if(session('success_create_officer'))
Swal.fire({
    icon: 'success',
    title: 'Berhasil Menambahkan Akun!',
    timer: 2500,
    timerProgressBar: true,
    showConfirmButton: false,
    customClass: {
        popup: 'background',
        title: 'title',
    }
})
@endif

// Pop Up Card Review Report
// Detail Report
function showPopup(id, title, destination, date_create, status, message, id_user) {
    Swal.fire({
        title: title,
        html: '<div class="text-base text-left">' +
            '<p>Kepada: ' + destination + '</p>' +
            '<p>Dibuat: ' + date_create + '</p>' +
            '<p>Status: ' + status + '</p><br>' +
            '</div>' +
            '<p class="text-base text-justify">' + message + '</p>',
        scrollbarPadding: true,
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Validate',
        cancelButtonText: 'Comment',
        customClass: {
            popup: 'background-preview',
            title: 'title-preview',
            confirmButton: 'btn-confirm-preview',
            cancelButton: 'btn-comment',
        }
    }).then((result) => {
        // validate the report and than change status to process
        if (result.isConfirmed) {
            // Confirmation validate the report
            Swal.fire({
                title: 'Yakin Ingin Memvalidasi Laporan<br>' + title + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: ' Yes ',
                cancelButtonText: ' No ',
                customClass: {
                    popup: 'background',
                    confirmButton: 'btn-confirm',
                    cancelButton: 'btn-cancel',
                    title: 'title',
                }
            }).then((result) => {
                // If Confirmation is agree
                if (result.isConfirmed) {
                    // Update Status Record
                    axios.put('/preview/report/' + id + '/update', {
                            new_value: 'Proses'
                        })
                        .then(response => {
                            // Popup Success
                            Swal.fire({
                                icon: 'success',
                                title: 'Laporan Berhasil Divalidasi',
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                customClass: {
                                    popup: 'background',
                                    title: 'title',
                                }
                            });
                            // Refresh Page
                            setTimeout(function() {
                                location.reload();
                            }, 1400);
                        })
                        // Catch Error
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Memvalidasi Laporan',
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                customClass: {
                                    popup: 'background',
                                    title: 'title',
                                }
                            })
                        });
                }
            })
        }

        // comment the report 
        else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Enter Comment',
                input: 'text',
                inputPlaceholder: 'Masukkan tanggapan',
                inputAttributes: {
                    autocapitalize: 'off',
                },
                showCancelButton: true,
                confirmButtonText: 'Submit',
                cancelButtonText: 'Cancel',
                customClass: {
                    input: 'input-text',
                    popup: 'background',
                    title: 'title',
                    confirmButton: 'btn-confirm',
                    cancelButton: 'btn-cancel',
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Value input comment
                    const input_comment = result.value;
                    // Update Status Record
                    axios.put('/comment/insert/' + id, {
                            view_comment: input_comment,
                            view_id_user: id_user,
                        })
                        .then(response => {
                            // Popup Success
                            Swal.fire({
                                icon: 'success',
                                title: 'Tanggapan Ditambahkan',
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                customClass: {
                                    popup: 'background',
                                    title: 'title',
                                }
                            });
                            // Refresh Page
                            setTimeout(function() {
                                location.reload();
                            }, 1400);
                        })
                        // Catch Error
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Menambahkan Tanggapan',
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                customClass: {
                                    popup: 'background',
                                    title: 'title',
                                }
                            })
                        });
                }
            });

        }
    })
}

// Popup Validated Card
// Detail Report
function showPopupValidated(id, title, destination, date_create, status, message, id_user, role) {
    // Show popup options if role = admin Add Download Button
    let popupOptions = {
        title: title,
        html: '<div class="text-base text-left">' +
            '<p>Kepada: ' + destination + '</p>' +
            '<p>Dibuat: ' + date_create + '</p>' +
            '<p>Status: ' + status + '</p><br>' +
            '</div>' +
            '<p class="text-base text-justify">' + message + '</p>',
        scrollbarPadding: true,
        showCloseButton: true,
        confirmButtonText: 'Comment',
        customClass: {
            popup: 'background-preview',
            title: 'title-preview',
            confirmButton: 'btn-comment',
            cancelButton: 'btn-confirm',
        }
    };
    if (role === 'admin') {
        popupOptions.showCancelButton = true;
        popupOptions.cancelButtonText = 'Download';
    }

    Swal.fire(popupOptions)
        .then((result) => {
            // validate the report and than change status to process
            if (result.isConfirmed) {
                // Confirmation validate the report
                Swal.fire({
                    title: 'Enter Comment',
                    input: 'text',
                    inputPlaceholder: 'Masukkan Tanggapan',
                    inputAttributes: {
                        autocapitalize: 'off',
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Submit',
                    cancelButtonText: 'Cancel',
                    customClass: {
                        input: 'input-text',
                        popup: 'background',
                        title: 'title',
                        confirmButton: 'btn-confirm',
                        cancelButton: 'btn-cancel',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Value input comment
                        const input_comment = result.value;
                        // Update Status Record
                        axios.put('/comment/insert/' + id, {
                                view_comment: input_comment,
                                view_id_user: id_user,
                            })
                            .then(response => {
                                // Popup Success
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Tanggapan Ditambahkan',
                                    timer: 1500,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                    customClass: {
                                        popup: 'background',
                                        title: 'title',
                                    }
                                });
                                // Refresh Page
                                setTimeout(function() {
                                    location.reload();
                                }, 1400);
                            })
                            // Catch Error
                            .catch(error => {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal Menambahkan Tanggapan',
                                    timer: 1500,
                                    timerProgressBar: true,
                                    showConfirmButton: false,
                                    customClass: {
                                        popup: 'background',
                                        title: 'title',
                                    }
                                })
                            });

                    }
                });
            }
            // If Choose Button Download
            else if (result.dismiss === Swal.DismissReason.cancel) {
                // Download File with change url 
                window.location.href = '/report/download/' + id;

                axios.put('/preview/report/' + id + '/update', {
                    new_value: 'Selesai'
                })
            }
        })
}

// Detail Your Report
function showPopupMyReport(id, title, destination, date_create, status, message) {
    // Popup Options if Status = Terkirim Add Button Delete
    let popupOptions = {
        title: title,
        html: '<div class="text-base text-left">' +
            '<p>Kepada: ' + destination + '</p>' +
            '<p>Dibuat: ' + date_create + '</p>' +
            '<p>Status: ' + status + '</p><br>' +
            '</div>' +
            '<p class="text-base text-justify">' + message + '</p>',
        scrollbarPadding: true,
        showCancelButton: true,
        showConfirmButton: false,
        cancelButtonText: 'Close',
        customClass: {
            popup: 'background-preview',
            title: 'title-preview',
            cancelButton: 'btn-confirm',
            confirmButton: 'btn-cancel',
        }
    };
    if (status === "Terkirim") {
        popupOptions.showConfirmButton = true;
        popupOptions.confirmButtonText = 'Delete';
    }

    Swal.fire(popupOptions)
        .then((result) => {
            // If Click Delete
            if (result.isConfirmed) {
                // Confirmation Delete
                Swal.fire({
                        title: 'Yakin Ingin Menghapus Laporan<br>' + title + '?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: ' Yes ',
                        cancelButtonText: ' No ',
                        customClass: {
                            popup: 'background',
                            confirmButton: 'btn-confirm',
                            cancelButton: 'btn-cancel',
                            title: 'title',
                        }
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            // Delete Axios
                            axios.delete('/report/delete/' + id, {})
                                .then(response => {
                                    // Popup Success Delete
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil Menghapus Laporan',
                                        timer: 1500,
                                        timerProgressBar: true,
                                        showConfirmButton: false,
                                        customClass: {
                                            popup: 'background',
                                            title: 'title',
                                        }
                                    });
                                    // Refresh Page
                                    setTimeout(function() {
                                        location.reload();
                                    }, 1400);
                                })
                                // Catch Error
                                .catch(error => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal Menghapus Laporan',
                                        timer: 1500,
                                        timerProgressBar: true,
                                        showConfirmButton: false,
                                        customClass: {
                                            popup: 'background',
                                            title: 'title',
                                        }
                                    })
                                });
                        }
                    });
            }
        })
}

function showPopupComment(title, comment) {
    Swal.fire({
        title: 'Tanggapan Laporan <br>' + title,
        html: '<div class="text-justify">' + comment + '</div>',
        scrollbarPadding: true,
        showCloseButton: true,
        confirmButtonText: 'Ok',
        customClass: {
            popup: 'background-preview',
            title: 'title-preview',
            confirmButton: 'btn-confirm',
        }
    })
}
</script>