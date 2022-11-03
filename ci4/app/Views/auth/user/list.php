<table id="listuser" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Roles</th>
            <th>Status</th>
            <th>Tindakan</th>
        </tr>
    </thead>


    <tbody>
        <?php $nomor = 0;
        foreach ($list as $data) :
            $nomor++; ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= esc($data['nama']) ?></td>
                <td><?= esc($data['username']) ?></td>
                <td>
                    <?php if ($data['level'] == '1') { ?>
                        <h6>
                            <span class="badge badge-success">Admin</span>
                        </h6>
                    <?php } elseif ($data['level'] == '2') { ?>
                        <h6>
                            <span class="badge badge-warning">Penilai</span>
                        </h6>
                    <?php } elseif ($data['level'] == '3') { ?>
                        <h6>
                            <span class="badge badge-secondary">UPD</span>
                        </h6>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($data['active'] == '1') { ?>
                        <h6>
                            <span class="badge badge-success">Aktif</span>
                        </h6>
                    <?php } else { ?>
                        <h6>
                            <span class="badge badge-danger">Tidak Aktif</span>
                        </h6>
                    <?php } ?>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" onclick="edit('<?= $data['user_id'] ?>')">
                        <i class="fa fa-edit mr-1 mb-1"></i> Edit
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $data['user_id'] ?>')">
                        <i class="fa fa-trash mr-1"></i> Hapus
                    </button>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#listuser').DataTable();

    });

    function edit(user_id) {
        $.ajax({
            type: "post",
            url: "<?= site_url('user/formedit') ?>",
            data: {
                user_id: user_id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            }
        });
    }

    function hapus(user_id) {
        Swal.fire({
            title: 'Hapus user?',
            text: `Apakah anda yakin menghapus user?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('user/hapus') ?>",
                    type: "post",
                    dataType: "json",
                    data: {
                        user_id: user_id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Data Berhasil Dihapus!",
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            listuser();
                        }
                    }
                });
            }
        })
    }

</script>