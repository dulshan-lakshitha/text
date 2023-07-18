<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

  <script src="assets/js/jquery.min.js"></script>

  <link href="assets/css/style.css" rel="stylesheet">





</head>

<body>

  <div class="header">
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div>




  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">

      </a>

    </div><!-- End Logo -->

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->


  <div class="main-body">
    <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>


      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">


              <div class="col-xxl-8 col-md-8">
                <div class="card-dashboard text-end py-2">

                  <span class="badge bg-success">30-05-2023 </span> Last update: 1 day ago



                </div>
              </div>

              <div class="col-xxl-4 col-md-4">
                <div class="card-dashboard text-end">

                  <button type="button" class="btn btn-info me-3" href="#" role="button"><i
                      class="bi bi-plus-lg"></i>Add New</button>

                  <button type="button" class="btn btn-info" href="#" role="button">Cancel</button>
                </div>
              </div>

              <!-- Editable table -->
              <div class="card pt-4 mt-3">

                <div class="card-body add-user">
                  <form class="row needs-validation" method="post" action="/save-new-sale" novalidate>
                    <?php echo csrf_field(); ?>
                    <div id="vertical_tab_nav">

                      <ul>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Owner</a></li>
                        <li><a href="#">Production</a></li>
                        <li><a href="#">Engineering / Owner</a></li>
                        <li><a href="#">Engineering</a></li>
                        <li><a href="#">Quality / Owner</a></li>
                        <li><a href="#">Production / Owner</a></li>
                        <li><a href="#">Engineering</a></li>
                        <li><a href="#">Quality</a></li>
                        <li><a href="#">Owner / Finance</a></li>
                        <li><a href="#">Production</a></li>
                        <li><a href="#">All departments</a></li>
                      </ul>

                      <div class="article-content">
                        <article id="sales">
                          <div class="row">

                            <div class="md-form col-xxl-4">
                              <input type="text" class="form-control" name="so" id="so">
                              <label for="" class="text-secondary">SO</label>
                            </div>

                            <div class="md-form col-xxl-4">
                              <input type="text" class="form-control" name="salesman" id="salesman">
                              <label for="" class="text-secondary">Sales</label>
                            </div>

                            <div class="md-form col-xxl-4">
                              <label for="" class="text-secondary date-title">PO date</label>
                              <input class="form-control" type="date" name="po_date" id="po_date" />

                            </div>

                            <div class="md-form col-xxl-4">
                              <input type="text" class="form-control" name="customer_name" id="customer_name">
                              <label for="" class="text-secondary">Customer Name</label>
                            </div>

                            <div class="md-form col-xxl-4">
                              <select class="form-select no-border border-bottom space_t "
                                aria-label="Default select example" name="country_id" id="country_id">
                                <option selected>Country</option>
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                            </div>



                            <div class="md-form col-xxl-4">
                              <select class="form-select no-border border-bottom space_t"
                                aria-label="Default select example" name="type" id="type">
                                <option selected>Type</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                              </select>
                            </div>

                            <div class="col-xxl-4 space_t extra-space pl-2">
                              <label class="form-check-label text-secondary" for="flexRadioDisabled"> Strategic Contract
                              </label>
                              <input class="form-check-input ml-3" type="radio" name="strategic_contract"
                                id="strategic_contractRadio1" value="Yes">
                              <label class="form-check-label text-secondary" for="strategic_contractRadio1">Yes</label>
                              <input class="form-check-input ml-1" type="radio" name="strategic_contract"
                                id="strategic_contractRadio2" value="No">
                              <label class="form-check-label text-secondary" for="strategic_contractRadio2">No</label>
                            </div>

                            <div class="md-form col-xxl-4">
                              <input type="text" class="form-control" name="advanced_payment" id="advanced_payment">
                              <label for="advanced_payment" class="text-secondary">Advance payment</label>
                            </div>


                            <div class="md-form col-xxl-4">
                              <input type="text" class="form-control" name="owner" id="owner">
                              <label for="owner" class="text-secondary">Owner</label>
                            </div>



                            <div class="md-form col-xxl-4 mt-4">
                              <label for="client_update_date_01" class="text-secondary date-title">Client Update
                                Date</label>
                              <input class="form-control " type="date" placeholder="Select your date"
                                name="client_update_date_01" id="client_update_date_01" />
                            </div>

                            <div class="md-form col-xxl-4 mt-4">
                              <label for="" class="text-secondary date-title">SO Locked Date</label>
                              <input class="form-control" type="date" placeholder="Select your date"
                                name="so_locked_date" id="so_locked_date" />
                            </div>
                          </div>

                        </article>

                        <article id="owner">

                          <div class="row">

                            <div class="md-form col-xxl-4">
                              <label for="" class="text-secondary date-title">Execution Plan Discharge date</label>
                              <input class="form-control" type="date" name="execution_plan_discharge_date"
                                id="execution_plan_discharge_date" />
                            </div>

                            <div class="md-form col-xxl-4">
                              <label for="" class="text-secondary date-title">Client Update</label>
                              <input class="form-control" type="date" name="client_update_date_02"
                                id="client_update_date_02" />
                            </div>

                            <div class="md-form col-xxl-4">
                              <label for="" class="text-secondary date-title">Client KOM date</label>
                              <input class="form-control" type="date" name="client_kom_date" id="client_kom_date" />
                            </div>

                          </div>

                          <div class="row sub">
                            <div class="xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Part Info From Cliente</h5>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="part_info_from_client_actual_date"
                                id="part_info_from_client_actual_date" />
                            </div>
                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="part_info_from_client_actual_qty"
                                id="part_info_from_client_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="part_info_from_client_target_date"
                                id="part_info_from_client_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="part_info_from_client_target_qty"
                                id="part_info_from_client_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>

                          </div>

                        </article>



                        <article id="production">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Raw Material Outsource</h5>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="raw_matel_outsource_actual_date"
                                id="raw_matel_outsource_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="raw_matel_outsource_actual_qty"
                                id="raw_matel_outsource_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="raw_matel_outsource_target_date"
                                id="raw_matel_outsource_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="raw_matel_outsource_target_qty"
                                id="raw_matel_outsource_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                        </article>

                        <article id="engineering">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Engineering</h5>
                            </div>
                            <div class="col-xxl-12 pb-2">
                              <h6 class="mb-4">Initial Assesmente</h6>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="initial_assesment_actual_date"
                                id="initial_assesment_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="initial_assesment_actual_qty"
                                id="initial_assesment_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="initial_assesment_target_date"
                                id="initial_assesment_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="initial_assesment_target_qty"
                                id="initial_assesment_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>



                          <div class="col-xxl-12 pb-2">
                            <h6 class="mb-4">Need To Move 2023 07 03</h6>
                          </div>

                          <div class="md-form col-xxl-3">
                            <label for="" class="text-secondary date-title">Actual date</label>
                            <input class="form-control" type="date" name="pre_mob_actual_date"
                              id="pre_mob_actual_date" />
                          </div>

                          <div class="md-form col-xxl-3">
                            <input type="text" class="form-control" name="pre_mob_actual_qty" id="pre_mob_actual_qty">
                            <label for="" class="text-secondary">Actual Quantity</label>
                          </div>

                          <div class="md-form col-xxl-3">
                            <label for="" class="text-secondary date-title">Target date</label>
                            <input class="form-control" type="date" name="pre_mob_target_date"
                              id="pre_mob_target_date" />
                          </div>

                          <div class="md-form col-xxl-3">
                            <input type="text" class="form-control" name="pre_mob_target_qty" id="pre_mob_target_qty">
                            <label for="" class="text-secondary">Delivered Quantity</label>
                          </div>

                        </article>

                        <article id="engineering-2">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Parts Capturing Date</h5>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="parts_capturing_actual_date"
                                id="parts_capturing_actual_date" />
                            </div>
                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="parts_capturing_actual_qty"
                                id="parts_capturing_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="parts_capturing_target_date"
                                id="parts_capturing_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="parts_capturing_target_qty"
                                id="parts_capturing_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>


                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Design & Engineering date</h5>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="design_engineering_actual_date"
                                id="design_engineering_actual_date" />
                            </div>
                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="design_engineering_actual_qty"
                                id="design_engineering_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="design_engineering_target_date"
                                id="design_engineering_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="design_engineering_target_qty"
                                id="design_engineering_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                          <div class="row sub">
                            <div class="xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">DFAM+Build Prep</h5>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="dfam_build_prep_actual_date"
                                id="dfam_build_prep_actual_date" />
                            </div>
                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="dfam_build_prep_actual_qty"
                                id="dfam_build_prep_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="dfam_build_prep_target_date"
                                id="dfam_build_prep_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="dfam_build_prep_target_qty"
                                id="dfam_build_prep_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>
                        </article>

                        <article id="quality">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Quality</h5>
                            </div>
                            <div class="col-xxl-12 pb-2">
                              <h6 class="mb-4 pb-2">ITP + Manufacturing Document</h6>
                            </div>
                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="itp_manufacturing_document_actual_date"
                                id="itp_manufacturing_document_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="itp_manufacturing_document_actual_qty"
                                id="itp_manufacturing_document_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="itp_manufacturing_document_target_date"
                                id="itp_manufacturing_document_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="itp_manufacturing_document_target_qty"
                                id="itp_manufacturing_document_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Owner</h5>
                            </div>
                            <div class="col-xxl-12 pb-2">
                              <h6 class="mb-0 pb-2">Client Update </h6>
                            </div>

                            <div class="md-form col-xxl-6">
                              <input type="date" class="form-control" name="client_update_date_03"
                                id="client_update_date_03">
                              <label for="" class="text-secondary">Client Update </label>
                            </div>
                        </article>


                        <article id="production-2">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Production</h5>
                            </div>
                            <div class="col-xxl-12 pb-2 mb-4">
                              <h6>3D Printing</h6>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="_3d_printing_actual_date"
                                id="_3d_printing_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="_3d_printing_actual_qty"
                                id="_3d_printing_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="_3d_printing_target_date"
                                id="_3d_printing_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="_3d_printing_target_qty"
                                id="_3d_printing_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2 mb-2">
                              <h5 class="mb-0 pb-2">Owner</h5>
                            </div>
                            <div class="col-xxl-12 pb-2 mb-0">
                              <h6>Client Update date</h6>
                            </div>


                            <div class="md-form ">
                              <input type="date" class="form-control" name="client_update_date_04"
                                id="client_update_date_03">
                              <label for="" class="text-secondary">Client Update </label>
                            </div>
                        </article>


                        <article id="engineering-2">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Outsource Production</h5>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="outsource_production_actual_date"
                                id="outsource_production_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="outsource_production_actual_qty"
                                id="outsource_production_actual_date">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="outsource_production_target_date"
                                id="outsource_production_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="outsource_production_target_qty"
                                id="outsource_production_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>


                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Post Processing</h5>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="post_processing_actual_date"
                                id="post_processing_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="post_processing_actual_qty"
                                id="post_processing_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="post_processing_target_date"
                                id="post_processing_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="post_processing_target_qty"
                                id="post_processing_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                          <div class="row sub">
                            <div class="xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Assembly</h5>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="assembly_actual_date"
                                id="assembly_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="assembly_actual_qty"
                                id="assembly_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="assembly_target_date"
                                id="assembly_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="assembly_target_qty"
                                id="assembly_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>
                        </article>

                        <article id="quality-2">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Quality</h5>
                            </div>
                            <div class="col-xxl-12 pb-2 mb-4">
                              <h6>QC Testing</h6>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="qc_testing_actual_date"
                                id="qc_testing_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="qc_testing_actual_qty"
                                id="qc_testing_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="qc_testing_target_date"
                                id="qc_testing_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="qc_testing_target_qty"
                                id="qc_testing_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Quality / Owner</h5>
                            </div>
                            <div class="col-xxl-12 pb-2 mb-4">
                              <h6>Final Report + Estimation/ Data to customer</h6>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date"
                                name="final_rep_estimation_data_to_customer_actual_date"
                                id="final_rep_estimation_data_to_customer_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control"
                                name="final_rep_estimation_data_to_customer_actual_qty"
                                id="final_rep_estimation_data_to_customer_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date"
                                name="final_rep_estimation_data_to_customer_target_date"
                                id="final_rep_estimation_data_to_customer_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control"
                                name="final_rep_estimation_data_to_customer_target_qty"
                                id="final_rep_estimation_data_to_customer_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                        </article>

                        <article id="owner-3">

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Owner</h5>
                            </div>

                            <div class="md-form col-xxl-6">
                              <label for="" class="text-secondary date-title">Client Update date</label>
                              <input class="form-control" type="date" name="client_update_date_05"
                                id="client_update_date_05" />
                            </div>

                          </div>

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-2 pb-2">Finance</h5>
                            </div>

                            <div class="md-form col-xxl-6">
                              <input type="text" class="form-control" name="cash_collected" id="cash_collected">
                              <label for="" class="text-secondary">Cash Collected</label>
                            </div>

                          </div>
                        </article>

                        <article id="production-3">
                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-4 pb-2">Final Delivery date</h5>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Actual date</label>
                              <input class="form-control" type="date" name="final_delivery_actual_date"
                                id="final_delivery_actual_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="final_delivery_actual_qty"
                                id="final_delivery_actual_qty">
                              <label for="" class="text-secondary">Actual Quantity</label>
                            </div>

                            <div class="md-form col-xxl-3">
                              <label for="" class="text-secondary date-title">Target date</label>
                              <input class="form-control" type="date" name="final_delivery_target_date"
                                id="final_delivery_target_date" />
                            </div>

                            <div class="md-form col-xxl-3">
                              <input type="text" class="form-control" name="final_delivery_target_qty"
                                id="final_delivery_target_qty">
                              <label for="" class="text-secondary">Delivered Quantity</label>
                            </div>
                          </div>

                        </article>

                        <article id="departments">

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-0 pb-2">Actions</h5>
                            </div>

                            <div class="md-form col-xxl-6">
                              <input type="text" class="form-control" name="actions" id="actions">
                              <label for="" class="text-secondary">Text here</label>
                            </div>

                          </div>

                          <div class="row sub">
                            <div class="col-xxl-12 pb-2">
                              <h5 class="mb-0 pb-2">Lessons learnd</h5>
                            </div>

                            <div class="md-form col-xxl-6">
                              <input type="text" class="form-control" name="lessons_learnd" id="lessons_learnd">
                              <label for="" class="text-secondary">Text here</label>
                            </div>

                          </div>
                        </article>




                      </div>



                    </div>



                    <div class="col-xxl-12 pb-2"> <button type="submit"
                        class="btn btn-info waves-effect waves-light float-end less-space">Save</button>


                    </div>

                  </form>


                </div>
              </div>
            </div>
            <!-- Editable table -->

          </div>
        </div><!-- End Left side columns -->








  </div>
  </section>

  </main><!-- End #main -->
  </div>


  <nav class="sidebar-width d-none d-md-block bg-white sidebar-right">

    <div class="sidebar-sticky">
      <ul class="nav flex-column">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/user-img.png" alt="Profile" class="rounded-circle user-img">
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Project Manager</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->


      </ul>
    </div>
  </nav>



  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/mdb.min.js"></script>


  <script>

    $(document).ready(function () {


      //----------Select the first tab and div by default

      $('#vertical_tab_nav > ul > li > a').eq(0).addClass("selected");
      $('#vertical_tab_nav > div > article').eq(0).css('display', 'block');


      //---------- This assigns an onclick event to each tab link("a" tag) and passes a parameter to the showHideTab() function

      $('#vertical_tab_nav > ul').click(function (e) {

        if ($(e.target).is("a")) {

          /*Handle Tab Nav*/
          $('#vertical_tab_nav > ul > li > a').removeClass("selected");
          $(e.target).addClass("selected");

          /*Handles Tab Content*/
          var clicked_index = $("a", this).index(e.target);
          $('#vertical_tab_nav > div > article').css('display', 'none');
          $('#vertical_tab_nav > div > article').eq(clicked_index).fadeIn();

        }

        $(this).blur();
        return false;

      });


    });//end ready

  </script>


</body>

</html><?php /**PATH R:\project\resources\views/adnew.blade.php ENDPATH**/ ?>