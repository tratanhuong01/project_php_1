<?php 
    function KetNoiMYSQL() {
        $kn = null;
        try {
            $kn = new PDO("mysql:host=localhost;dbname=shopbanhoa", "root", "");
        } catch (Exception $e) {
            $e->getMessage();
        }
        return $kn;
    }
    function getSanPhamByNSP($cauTruyVan) {
        $query = "SELECT * FROM sanpham INNER JOIN nhomsp ON sanpham.manhom = nhomsp.manhom " . $cauTruyVan;
        $kn = KetNoiMYSQL();
        $state = $kn->prepare($query);
        $state->execute();
        $arr = $state->fetchAll(PDO::FETCH_ASSOC);
        return $arr;
    }
?>