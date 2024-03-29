<?php
require_once('template/head.php');
?>
<link href="<?= base_url('public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?= base_url('public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?= base_url('public/assets/libs/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet" type="text/css" />

<!--datatable -->
<div id="layout-wrapper">

    <?php require_once('template/header.php'); ?>
    <!-- ========== Left Sidebar Start ========== -->
    <?php require_once('template/side-menu.php'); ?>
    <!-- Left Sidebar End -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18"><?= $title ?></h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="datatable-buttons" class="table table-bordered  dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Name</th>
                                                            <th>Course Packages</th>
                                                            <th>Type</th>
                                                            <th>Transaction No</th>
                                                            <th>Screenshot</th>
                                                            <th>Price</th>

                                                            <th>Status</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $x = 1;
                                                        foreach ($ArrayPayInfo as $row) {
                                                        ?>
                                                            <tr id="<?= $row['pay_id'] ?>">
                                                                <th><?= $x ?></th>
                                                                <th>
                                                                    <?= $row['Login_name'] ?>
                                                                </th>
                                                                <th><?= $row['category_name'] ?></th>
                                                                <th><?= $row['type'] ?></th>
                                                                <th><?= $row['transaction_no'] ?></th>
                                                                <th>
                                                                    <div class="popup-gallery d-flex flex-wrap">
                                                                        <a href="<?= base_url('uploads/payment/' . $row['screenshot']) ?>" title="<?= $row['Login_name'] ?>, Transaction NO <?= $row['transaction_no'] ?>, Price ₹<?= $row['price'] ?> , Date <?= $row['pay_date'] ?>">
                                                                            <img src="<?= base_url('uploads/payment/' . $row['screenshot']) ?>" style="height: 30px;">
                                                                        </a>
                                                                    </div>
                                                                </th>
                                                                <th>₹<?= $row['price'] ?></th>
                                                                <td>
                                                                    <?php
                                                                    if ($row['pay_status'] == 'Active') {
                                                                        $color = 'success';
                                                                        $status = $row['pay_status'];
                                                                    } else {
                                                                        $color = 'danger';
                                                                        $status = $row['pay_status'];
                                                                    }
                                                                    ?>
                                                                    <a class="btn btn-<?= $color; ?> btn-rounded waves-effect waves-light"><?= $status ?></a>
                                                                </td>
                                                                <th><?= $row['pay_date'] ?></th>
                                                            <?php $x++;
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- End Page-content -->
            </div>
        </div>
    </div>
    <!-- end main content-->
</div>


<!-- END layout-wrapper -->
<?php require_once('template/script.php'); ?>
<script src="<?= base_url('public/js/code.js') ?>"></script>
<!-- Required datatable js -->
<!-- Magnific Popup-->
<script src="<?= base_url('public/') ?>assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- lightbox init js-->
<script src="<?= base_url('public/') ?>assets/js/pages/lightbox.init.js"></script>

<script src="<?= base_url('public/') ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('public/') ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<!-- Datatable init js -->
<script src="<?= base_url('public/') ?>assets/js/pages/datatables.init.js"></script>