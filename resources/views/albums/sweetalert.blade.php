<script>
    document.querySelectorAll('.delete-album').forEach(function (button) {
        button.addEventListener('click', function () {
            var albumId = this.getAttribute('data-id');
            Swal.fire({
                title: 'Choose an option',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Delete All Pictures',
                cancelButtonText: 'Move Pictures to Another Folder'
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteAllPictures(albumId);
                } else {
                    movePictures(albumId);
                }
            });
        });
    });

    

    
</script>
