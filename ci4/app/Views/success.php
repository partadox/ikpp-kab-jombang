<?= $this->extend('main') ?>

<?= $this->section('isi') ?>


<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading text-center">
                    <h6>Lembar Penilaian Kinerja Unit Penyelenggara Pelayanan Publik (UPP)</h6>
                </div>
                <div class="steps-content">
                    <h6>Success</h6>
                </div>
                
            </div>
            <div class="right-side">
                <div class="main active">
                    
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                         <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                     
                    <div class="text congrats">
                        <h2>Berhasil!</h2>
                        <h6>Penilaian berhasil disimpan.</h6>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" id="logout">Kembali</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('a#logout').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Berikan Penilaian Lagi?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('home/try') ?>",
                    type: 'post',
                    dataType: 'json',
                    success: function(response) {
                        Swal.fire({
                            title: "Redirect",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1250
                        }).then(function() {
                            window.location = '<?= site_url('/') ?>';
                        });
                    }
                });
            }
        })
    })
</script>


<?= $this->endSection('isi') ?>