<?= $this->extend('layout/script') ?>

<?= $this->section('judul') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item"><a href="javascript:void(0);"> IKPP</a></li>
        <li class="breadcrumb-item active">List</li>
    </ol>
</div>
<?= $this->endSection('judul') ?>

<?= $this->section('isi') ?>


<div class="viewdata">
</div>

<div class="viewmodal">
</div>


<script>
    function listikpp() {
        $.ajax({
            url: "<?= site_url('ikpp/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        listikpp();
    });
</script>
<?= $this->endSection('isi') ?>