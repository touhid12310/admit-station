<div>
    @if (session('error'))
        <div class="mt-2 bg-danger text-sm text-white rounded-lg p-4 mb-4" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire({
                position: "center",
                icon: e.detail[0].icon, // error or success
                title: e.detail[0].title,
            }).then((result) => {
                // Only redirect if the user clicks "OK"
                if (result.isConfirmed && e.detail[0].redirectUrl) {
                    window.location.href = e.detail[0].redirectUrl;
                }
            });
        });
    </script>
</div>
