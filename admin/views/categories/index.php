<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>
        <a class="btn btn-primary" href="<?= BASE_URL_ADMIN ?>?act=category-create">Create</a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables
            </h6>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                    <?php unset($_SESSION['success']) ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên thể loại</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên thể loại</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($categories as $category) : ?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['ten_the_loai'] ?></td>

                                <td>
                                    <a class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=category-detail&id=<?= $category['id'] ?>">Show</a>
                                    <a class="btn btn-warning" href="<?= BASE_URL_ADMIN ?>?act=category-update&id=<?= $category['id'] ?>">Update</a>
                                    <a class="btn btn-danger <?= $category['id'] == 1 ? 'disabled' : null ?>" href="<?= BASE_URL_ADMIN ?>?act=category-delete&id=<?= $category['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá không?')">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>