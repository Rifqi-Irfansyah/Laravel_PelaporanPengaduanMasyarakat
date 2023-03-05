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
    html: '@foreach ($errors->all() as $error)<li class="text-md leading-5 text-gray-500 text-sm text-left">{{ $error }}</li>@endforeach',
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
</script>