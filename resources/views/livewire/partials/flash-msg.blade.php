<div>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire({
                position: "center",
                icon: e.detail[0].icon, //error or success
                title: e.detail[0].title,
            });
        });
    </script>
</div>
