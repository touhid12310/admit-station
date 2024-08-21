<div>
    @if(session('error'))
        <div class="mt-2 bg-danger text-sm text-white rounded-lg p-4 mb-4" role="alert">
            {{ session('error')}}
        </div>
    @endif

    <script>
        window.addEventListener('swal', function(e) {
            alert(1)
            Swal.fire({
                position: "center",
                icon: e.detail[0].icon, //error or success
                title: e.detail[0].title,
            });
        });
    </script>
</div>
