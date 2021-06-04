<?php
include 'connec.php';
$str;

if (isset($_POST['brand'])) {
    $brand = $_POST['brand'];
} else {
    $brand = null;
}

if (isset($_POST['tyre_1'])) {
    $tyre_1 = $_POST['tyre_1'];
} else {
    $tyre_1 = null;
}

if (isset($_POST['tyre_2'])) {
    $tyre_2 = $_POST['tyre_2'];
} else {
    $tyre_2 = null;
}

if (isset($_POST['tyre_3'])) {
    $tyre_3 = $_POST['tyre_3'];
    // if ($brand != null || $tyre_1 != null || $tyre_2 != null) {
    //     $str =  "$str" . "AND tyre_3 IN ('" . implode("','", $tyre_3) . "') ";
    // }else if ($brand != null || $tyre_1 != null || $tyre_2 != null) {
    //         $str = "where tyre_3 IN ('" . implode("','", $tyre_3) . "') ";
    // }
} else {
    $tyre_3 = null;
}
if (isset($_POST['reset'])) {
    $sql = "SELECT * FROM product";
} else {
    $sql = " SELECT * FROM product WHERE true ";
    $sql .= !empty($_POST['brand']) ? " AND  brand IN ('" . implode("','", $brand) . "') " : "";
    $sql .= !empty($_POST['tyre_1']) ? " AND  tyre_1 IN ('" . implode("','", $tyre_1) . "') " : "";
    $sql .= !empty($_POST['tyre_2']) ? " AND  tyre_2 IN ('" . implode("','", $tyre_2) . "') " : "";
    $sql .= !empty($_POST['tyre_3']) ? " AND  tyre_3 IN ('" . implode("','", $tyre_3) . "') " : "";
}

// $sql = "SELECT * FROM product";

$query = mysqli_query($conn, $sql);

// echo $sql;
?>
<!-- <div class="col-md-12">
    <table id="table" class="table table-bordered table-hover col-12">
        <thead class="thead-dark  ">
            <tr style="height:100%;">
                <th class="text-center" >ลำดับ</th>
                <th class="text-center" >รหัสสินค้า</th>
                <th class="text-center"  onclick="sortTable(1)">ขอบยาง</th>
                <th class="text-center"  onclick="sortTable(2)">ความหนา</th>
                <th class="text-center" >กว้าง</th>
                <th class="text-center"  onclick="sortTable(0)">ยี่่ห้อ</th>
                <th class="text-center"  >tyre_Gen</th>
                <th class="text-center" >ราคาสินค้า</th>
                <th class="text-center" >ราคาสินค้า</th>
                <th class="text-center" >หมายเหตุ</th>

            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div> -->

<div class="container-fluid ">
    <?php $i = 1;
    while ($result = mysqli_fetch_array($query)) { ?>
        <div class="row">
            <div class="col-xl-4 col-md-6 text-center img-bottom">
                <img data-u="image" src="https://www.b-quik.com/image/product/ProductManual/Image1/ML1955515PS3.jpg" class="img-fluid " onerror="this.onerror=null; this.src='https://www.b-quik.com/image/imagenull.png'" style="max-height: 318px">
            </div>
            <div class="col-xl-8 col-md-6">
            <img style="max-width: 145px; max-height: 44px" src="<?php echo $result['logo']; ?>" />
                <h4><?php echo $result['tyre_1'] . "/" . $result['tyre_2'] . "R" . $result['tyre_3'] ." ".$result['tyre_Gen'];   ?></h4>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-1">
                            <img src="https://www.b-quik.com/image/product/icon/0npttiekd1.icon-p-01.png" alt="product">
                            <div class="category">นุ่มเงียบ</div>
                        </div>
                        <div class=" col-xs-1">
                            <img src="https://www.b-quik.com/image/product/icon/gbswgklrvu.icon-p-04.png" alt="product">
                            <div class="category">ยึดเกาะถนน</div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-7 col-xl-7">ราคาปกติต่อเส้น <span style="font-size: 24px"> <?php echo $result['someprice']; ?> บาท</span></div>
                    <div class="col-xs-5 col-xl-5">
                        <div class=" form-group">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#centralModalInfo">
                                <i class="fas fa-info-circle  fa-lg "></i>
                            </button>
                        </div>
                    <div class="row">
<div class="col-xs-5">
<input type="number" placeholder="1" class="form-control" min="1"/>
</div>
                        <div class="col-xs-7">
                            <button type="button" class="btn btn-block " style="color: #ffcb05; background-color: #383838;" data-id="261"><img style="height: 3rem;" src="https://www.b-quik.com/front/images/basket.png" alt="map"> ใส่ตะกร้า </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<hr class="hr-line">
<?php $i++;
    } ?>

</div>