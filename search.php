<!DOCTYPE html>
<?php
include 'connec.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ค้นหายาง</title>


    <!-- <script src="jquery.min.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/e991de031b.js" crossorigin="anonymous"></script> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
    <!-- <link href="https://www.b-quik.com/css/myfrontcss.css" rel="stylesheet"> -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/js/bootstrap-select.min.js"></script>



    <style>
        body {
            margin-top: 20px;
            /* font-family: "Kanit", sans-serif; */
            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .loading {
            background-image: url("ajax-loader.gif");
            background-repeat: no-repeat;
            display: none;
            height: 100px;
            width: 100px;
        }

        h4 {
            font-size: 22px;
            font-weight: bold;
        }

        hr {
            border: 1px solid gray;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline" name="searchform" id="searchform">
                    <!-- <div class="form-group">
                        <label for="textsearch">ชื่อสินค้า</label>
                        <input type="text" name="itemname" id="itemname" class="form-control" placeholder="ข้อความ คำค้นหา!" autocomplete="off">
                    </div> -->


                    <div class="form-row " align="center">
                        <!-- <div class="row"> -->


                        <!-- tyre_1 -->
                        <div class="form-group ">

                            <?php
                            $sql = "SELECT Distinct tyre_1 FROM product";
                            $result1 = mysqli_query($conn, $sql); ?>

                            <select id="tyre_1" name="tyre_1" class="selectpicker" size="3" data-actions-box="true" data-live-search="true" title="หน้ากว้างยาว" data-width="auto" multiple data-selected-text-format="count>3">
                                <?php
                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option name="tyre_1" value="<?php echo $row['tyre_1']; ?>">
                                        <?php echo $row['tyre_1']; ?>
                                    </option>";
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Brand -->
                        <div class="form-group">

                            <?php
                            $sql = "SELECT Distinct tyre_2 FROM product";
                            $result1 = mysqli_query($conn, $sql); ?>

                            <select id="tyre_2" name="tyre_2" class="selectpicker" title="แก้มยางสูง" size="3" data-actions-box="true" data-live-search="true" data-width="auto" multiple data-selected-text-format="count>3">
                                <?php
                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option name="tyre_2" value="<?php echo $row['tyre_2']; ?>">
                                        <?php echo $row['tyre_2']; ?>
                                    </option>";
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Brand -->
                        <div class="form-group">

                            <?php
                            $sql = "SELECT Distinct tyre_3 FROM product";
                            $result1 = mysqli_query($conn, $sql); ?>

                            <select id="tyre_3" name="tyre_3" class="selectpicker" title="เส้นผ่านศูนย์กลางกระทะล้อ" size="3" data-actions-box="true" data-live-search="true" data-width="auto" multiple data-selected-text-format="count>3">
                                <?php
                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option name="tyre_3" value="<?php echo $row['tyre_3']; ?>">
                                        <?php echo $row['tyre_3']; ?>
                                    </option>";
                                <?php } ?>
                            </select>
                        </div>

                        <!-- Brand -->
                        <!-- <div class="form-group">
                            <?php
                            $sql = "SELECT Distinct brand FROM product";
                            $result1 = mysqli_query($conn, $sql); ?>

                            <select id="brand" name="brand" class="selectpicker" size="3" data-actions-box="true" data-live-search="true" title="เลือกยี่ห้อ" data-width="auto" multiple data-selected-text-format="count>3">
                                <?php
                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option name="brand" value="<?php echo $row['brand']; ?>">
                                        <?php echo $row['brand']; ?>
                                    </option>";
                                <?php } ?>
                            </select>
                        </div> -->
                        <!-- </div> -->

                        <button type="button" class="form-group btn btn-primary" id="Reset" onClick="document.location.reload(true)">
                            <i class="fas fa-sync"></i>
                            RESET
                        </button>
                    </div>

                </form>
            </div>
        </div>
        <div class="loading"></div>
        <div class="row" id="list-data" style="margin-top: 10px;">
        </div>
    </div>
    <script src="search.js"></script>
    <!-- <script src="sort.js"></script> -->
</body>

</html>


<!-- style Modal -->
<style>
    /*****************globals*************/
    body {
        font-family: 'open sans';
        overflow-x: hidden;
    }

    img {
        max-width: 100%;
    }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #b36800;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .orange {
        background: #ff9f1a;
    }

    .green {
        background: #85ad00;
    }

    .blue {
        background: #0076ad;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    /*# sourceMappingURL=style.css.map */
</style>
<!-- Central Modal Medium Info -->
<div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">รายละเอียดสินค้า</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center">

                    <div class="container-fliud">
                        <div class="card">
                            <div class="container-fliud">
                                <div class="wrapper row">
                                    <div class="preview col-md-6">

                                        <div class="preview-pic tab-content">
                                            <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                                            <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                                        </div>
                                        <ul class="preview-thumbnail nav nav-tabs">
                                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                            <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                            <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                            <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                                        </ul>

                                    </div>
                                    <div class="details col-md-6">
                                        <h3 class="product-title">men's shoes fashion</h3>
                                        <div class="rating">
                                            <div class="stars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <span class="review-no">41 reviews</span>
                                        </div>
                                        <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                                        <h4 class="price">current price: <span>$180</span></h4>
                                        <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                                        <h5 class="sizes">sizes:
                                            <span class="size" data-toggle="tooltip" title="small">s</span>
                                            <span class="size" data-toggle="tooltip" title="medium">m</span>
                                            <span class="size" data-toggle="tooltip" title="large">l</span>
                                            <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                                        </h5>
                                        <h5 class="colors">colors:
                                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                                            <span class="color green"></span>
                                            <span class="color blue"></span>
                                        </h5>
                                        <div class="action">
                                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-primary">หยิบใส่ตะกร้า<i class="fas fa-shopping-cart fa-sm "></i></a>
                <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, thanks</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Info-->