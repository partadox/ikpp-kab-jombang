<?= $this->extend('layout/script') ?>

<?= $this->section('judul') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Berita</a></li>
        <li class="breadcrumb-item active">List Berita</li>
    </ol>
</div>
<?= $this->endSection('judul') ?>

<?= $this->section('isi') ?>

<a>
    <button type="button" class="btn btn-primary tambahberita mb-2"><i class=" fa fa-plus-circle"></i> Tambah Berita</button>
</a>

<div class="viewdata">
</div>

<div class="viewmodal">
</div>


<script>
    function listberita() {
        $.ajax({
            url: "<?= site_url('berita/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        listberita();
        $('.tambahberita').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= site_url('berita/formtambah') ?>",
                dataType: "json",
                success: function(response) {
                    $('.viewmodal').html(response.data).show();

                    $('#modaltambah').modal('show');
                }
            });
        });
    });
</script>
<?= $this->endSection('isi') ?>