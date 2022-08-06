<?= $this->extend('layout/script') ?>

<?= $this->section('judul') ?>
<div class="col-sm-6">
    <h4 class="page-title"><?= $title ?></h4>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-right">
        <li class="breadcrumb-item"><a href="javascript:void(0);"> IKM</a></li>
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
    function listikm() {
        $.ajax({
            url: "<?= site_url('ikm/getdata') ?>",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            }
        });
    }

    $(document).ready(function() {
        listikm();
    });
</script>
<?= $this->endSection('isi') ?>