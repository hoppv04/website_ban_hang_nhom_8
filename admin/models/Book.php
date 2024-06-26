<?php

if (!function_exists('listAllForBook')) {
    function listAllForBook()
    {
        try {
            $sql = "
                SELECT
                s.id as s_id,
                s.ten_sach as s_ten_sach,
                s.hinh_nen as s_hinh_nen,
                s.gia as s_gia,
                s.xoa_mem as s_xoa_mem,
                s.loai_bia as s_loai_bia,
                s.so_trang as s_so_trang,
                s.so_luong_ton_kho as s_so_luong_ton_kho,
                s.mo_ta as s_mo_ta,
                s.luot_xem as s_luot_xem,
                s.san_pham_dac_sac as s_san_pham_dac_sac,
                s.ngay_ra_mat as s_ngay_ra_mat,
                tl.ten_the_loai as tl_ten_the_loai,
                nxb.ten_nha_xuat_ban as nxb_ten_nha_xuat_ban,
                ctph.ten_cong_ty_phat_hanh as ctph_ten_cong_ty_phat_hanh,
                kt.ten_kich_thuoc as kt_ten_kich_thuoc
                FROM sach as s
                INNER JOIN the_loai as tl ON tl.id = s.id_the_loai
                INNER JOIN nha_xuat_ban as nxb ON nxb.id = s.id_nha_xuat_ban
                INNER JOIN cong_ty_phat_hanh as ctph ON ctph.id = s.id_cong_ty_phat_hanh 
                INNER JOIN kich_thuoc as kt ON kt.id = s.id_kich_thuoc
                ORDER BY s_id DESC
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOneForBook')) {
    function showOneForBook($id)
    {
        try {
            $sql = "
                SELECT
                s.id as s_id,
                s.ten_sach as s_ten_sach,
                s.hinh_nen as s_hinh_nen,
                s.id_nha_xuat_ban as s_id_nha_xuat_ban,
                s.id_cong_ty_phat_hanh as s_id_cong_ty_phat_hanh,
                s.id_kich_thuoc as s_id_kich_thuoc,
                s.id_the_loai as s_id_the_loai,
                s.gia as s_gia,
                s.xoa_mem as s_xoa_mem,
                s.loai_bia as s_loai_bia,
                s.so_trang as s_so_trang,
                s.so_luong_ton_kho as s_so_luong_ton_kho,
                s.mo_ta as s_mo_ta,
                s.luot_xem as s_luot_xem,
                s.san_pham_dac_sac as s_san_pham_dac_sac,
                s.ngay_ra_mat as s_ngay_ra_mat,
                tl.ten_the_loai as tl_ten_the_loai,
                nxb.ten_nha_xuat_ban as nxb_ten_nha_xuat_ban,
                ctph.ten_cong_ty_phat_hanh as ctph_ten_cong_ty_phat_hanh,
                kt.ten_kich_thuoc as kt_ten_kich_thuoc
                FROM sach as s
                INNER JOIN the_loai as tl ON tl.id = s.id_the_loai
                INNER JOIN nha_xuat_ban as nxb ON nxb.id = s.id_nha_xuat_ban
                INNER JOIN cong_ty_phat_hanh as ctph ON ctph.id = s.id_cong_ty_phat_hanh 
                INNER JOIN kich_thuoc as kt ON kt.id = s.id_kich_thuoc
                WHERE
                s.id = :id
                LIMIT 1
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteAuthorsByBookId')) {
    function deleteAuthorsByBookId($bookId)
    {
        try {
            $sql = "DELETE FROM sach_tac_gia WHERE id_sach = :id_sach;";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':id_sach', $bookId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteBooksInCartsBookId')) {
    function deleteBooksInCartsBookId($bookId)
    {
        try {
            $sql = "DELETE FROM chi_tiet_gio_hang WHERE id_sach = :id_sach;";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':id_sach', $bookId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteBooksInOrdersBookId')) {
    function deleteBooksInOrdersBookId($bookId)
    {
        try {
            $sql = "DELETE FROM chi_tiet_don_hang WHERE id_sach = :id_sach;";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':id_sach', $bookId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('deleteCommentsByBookId')) {
    function deleteCommentsByBookId($bookId)
    {
        try {
            $sql = "DELETE FROM binh_luan WHERE id_sach = :id_sach;";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(':id_sach', $bookId);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueNameBookByCategory')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueNameBookByCategory($name, $idTheLoai)
    {
        try {
            $sql = "SELECT * FROM sach WHERE ten_sach = :name AND id_the_loai = :id_the_loai LIMIT 1";
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":id_the_loai", $idTheLoai);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('checkUniqueNameBookByCategoryForUpdate')) {
    // Nếu không trùng thì trả về True
    // Nếu trùng thì trả về False
    function checkUniqueNameBookByCategoryForUpdate($name, $idTheLoai, $id)
    {
        try {
            $sql = "SELECT * FROM sach WHERE ten_sach = :name AND id_the_loai = :id_the_loai AND id <> :id LIMIT 1";
            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":id_the_loai", $idTheLoai);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
