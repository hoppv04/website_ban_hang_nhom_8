<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Detail
            </h6>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Trường dữ liệu</th>
                    <th>Dữ liệu</th>
                </tr>

                <tr>
                    <td>Id</td>
                    <td><?= $publisher['id'] ?></td>
                </tr>
                <tr>
                    <td>Tên nhà xuất bản</td>
                    <td><?= $publisher['ten_nha_xuat_ban'] ?></td>
                </tr>

            </table>

            <a class="btn btn-danger" href="<?= BASE_URL_ADMIN ?>?act=publishers">Back to list</a>
        </div>
    </div>
</div>