<!-- Pop Up in Pages Report -->
<!-- POP UP VALIDATE SEND REPORT -->
<script>
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure, will send report?',
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

// Pop Up Error Validate Report
@if($errors -> any())
Swal.fire({
    icon: 'error',
    title: 'Failed Send',
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
    title: 'Report Succes Sent',
    timer: 2500,
    timerProgressBar: true,
    showConfirmButton: false,
    customClass: {
        popup: 'background',
        title: 'title',
    }
})
@endif


// Pop Up Preview Report
function showPopup(id, title, destination, date_create, status, message) {
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
        maxHeight: '100vh',
        customClass: {
            popup: 'background-preview',
            title: 'title-preview',
            confirmButton: 'btn-confirm-preview',
            cancelButton: 'btn-cancel-preview',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Validated',
                text: 'Laporan telah divalidasi',
                confirmButtonText: ' Yes ',
                customClass: {
                    popup: 'background',
                    title: 'title',
                    confirmButton: 'btn-confirm',
                }
            });
        }
    })
}
</script>