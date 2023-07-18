<?php $__env->startSection('content'); ?>

<main id="main" class="main">
   <?php echo csrf_field(); ?>
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

             <?php
             //$updated = DB::table('sales')->select('updated_at')->latest()->get();
            //$updated = DB::table('sales')->orderBy('updated_at', 'DISTINCT')->get();
            //$updated = DB::table('sales')->distinct('updated_at');

             ?>

                 

                 

              </div>
            </div>

            <div class="col-xxl-4 col-md-4">
              <div class="card-dashboard text-end">

                <button type="button" class="btn btn-info me-3" href="#" role="button"><i class="bi bi-plus-lg"></i>Add New</button> <button type="button" class="btn btn-info" href="#" role="button">Cancel</button>
              </div>
            </div>

            <!-- Editable table -->
<div class="card pt-4 mt-3">


  <div class="card-body">
    <div class="element" id="element">

      <div class="outer-wrapper">

        <div class="inner-wrapper">

    <div id="table" class="table-editable ">
      <table class="table pb-0 mb-0">
      <thead class="black white-text">
        <tr>
          <th scope="col" class="sales-bg text-center text-white h5">Sales</th>


        </tr>
      </thead>
      </table>

      <table class="table table-bordered table-responsive-md table-striped text-center th-head">
        <thead>
          <tr>
            <th class="text-center p-2">Delete</th>
            <th class="text-center">SO</th>
            <th class="text-center">Sales</th>
            <th class="text-center">PO date</th>
            <th class="text-center">Customer Name</th>
            <th class="text-center">Country</th>
            <th class="text-center">Type</th>
            <th class="text-center">Strategic Contract</th>
            <th class="text-center">Advance payment</th>
            <th class="text-center">Owner</th>
            <th class="text-center">Client Update Date</th>
            <th class="text-center">SO Locked Date</th>
            <th class="text-center">Execution Plan Discharge date</th>
            <th class="text-center">Client Update</th>
            <th class="text-center">Client KOM date</th>
            <th colspan="16" class="text-center">Part Info From Client</th>
          </tr>
        </thead>


        <tbody>

          <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="p-0"><button type="button" class="btn"><i class="bi bi-trash3"></i></button></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->so); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->sales); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->po_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->customer); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->country->name); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->type); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->strategic); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->ad_pay); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->owner->name); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->client_update_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->so_locked_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->ex_plan_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->client_update); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->client_KOM_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->partinfo->act_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->partinfo->act_part); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e(date_format(date_create($sa->partinfo->target_date), 'Y-m-d')); ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo e($sa->partinfo->target_part); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      </div>


      <div id="table" class="table-editable">
        <table class="table pb-0 mb-0">
        <thead class="black white-text">
          <tr>
            <th scope="col" class="owner-bg text-center text-white h5">Owner</th>
          </tr>
        </thead>
        </table>

        <table class="table table-bordered table-responsive-md table-striped text-center th-head">
          <thead>
            <tr>
                
                <th class="text-center">Part Info From Client</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="pt-3-half" contenteditable="true">Yes</td>
                <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="p-0">
                <table style="width:100%">
                  <tr>
                    <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                    <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                  </tr>
                  <tr>
                    <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                    <td class="pt-3-half four-col" contenteditable="true">4</td>
                  </tr>
                </table>
              </td>


            </tr>
            <!-- This is our clonable table line -->
            <tr>
              <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="pt-3-half" contenteditable="true">Yes</td>
                <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="p-0">
                <table style="width:100%">
                  <tr>
                    <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-info">13 Apr</span></td>
                    <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                  </tr>
                  <tr>
                    <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-info">4</span></td>
                    <td class="pt-3-half four-col" contenteditable="true">4</td>
                  </tr>
                </table>
              </td>

            </tr>
            <!-- This is our clonable table line -->
            <tr>
              <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="pt-3-half" contenteditable="true">Yes</td>
                <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="p-0">
                <table style="width:100%">
                  <tr>
                    <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                    <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                  </tr>
                  <tr>
                    <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                    <td class="pt-3-half four-col" contenteditable="true">4</td>
                  </tr>
                </table>
              </td>

            </tr>
            <!-- This is our clonable table line -->
            <tr class="hide">
              <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="pt-3-half" contenteditable="true">Yes</td>
                <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                <span id="startDateSelected"></span></td>
                <td class="p-0">
                <table style="width:100%">
                  <tr>
                    <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-info">13 Apr</span></td>
                    <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                  </tr>
                  <tr>
                    <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-info">4</span></td>
                    <td class="pt-3-half four-col" contenteditable="true">4</td>
                  </tr>
                </table>
              </td>


            </tr>
          </tbody>
        </table>
        </div>


        <div id="table" class="table-editable">
          <table class="table pb-0 mb-0">
          <thead class="black white-text">
            <tr>
              <th scope="col" class="production-bg text-center text-white h5">Production</th>
            </tr>
          </thead>
          </table>

          <table class="table table-bordered table-responsive-md table-striped text-center th-head">
            <thead>
              <tr>
                <th class="text-center">Raw Material Outsource</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-0">
                  <table style="width:100%">
                    <tr>
                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                    </tr>
                    <tr>
                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td class="p-0">
                  <table style="width:100%">
                    <tr>
                      <td class="ps-4" contenteditable="true">NA</td>
                    </tr>
                  </table>
                </td>

              </tr>

              <tr>
                <td class="p-0">
                  <table style="width:100%">
                    <tr>
                      <td class="ps-4" contenteditable="true">NA</td>
                    </tr>
                  </table>
                </td>

              </tr>

              <tr>
                <td class="p-0">
                  <table style="width:100%">
                    <tr>
                      <td class="pt-3-half inline-block four-col border-b border-r" contenteditable="true"><span class="text-danger"></span></td>
                      <td class="pt-3-half inline-block four-col border-b" contenteditable="true"></td>
                    </tr>
                    <tr>
                      <td class="pt-3-half inline-block four-col border-r" contenteditable="true"><span class="text-danger"></span></td>
                      <td class="pt-3-half inline-block four-col" contenteditable="true"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          </div>


          <div id="table" class="table-editable">
            <table class="table pb-0 mb-0">
            <thead class="black white-text">
              <tr>
                <th scope="col" class="engineer-bg text-center text-white h5">Engineering</th>
              </tr>
            </thead>
            </table>

            <table class="table table-bordered table-responsive-md table-striped text-center th-head">
              <thead>
                <tr>
                  <th class="text-center">Initial Assesmente</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td class="p-0">
                    <table style="width:100%">
                      <tr>
                        <td class="ps-4" contenteditable="true">NA</td>
                      </tr>
                    </table>
                  </td>

                </tr>

                <tr>
                  <td class="pt-3-half p-0"> <input id="startDate" class="form-control" type="date" />
                    <span id="startDateSelected"></span></td>

                </tr>

                <tr>
                  <td class="p-0">
                    <table style="width:100%">
                      <tr>
                        <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                        <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                      </tr>
                      <tr>
                        <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                        <td class="pt-3-half four-col" contenteditable="true">4</td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td class="p-0">
                    <table style="width:100%">
                      <tr>
                        <td class="ps-4" contenteditable="true">NA</td>
                      </tr>
                    </table>
                  </td>

                </tr>
              </tbody>
            </table>
            </div>

            <div id="table" class="table-editable">
              <table class="table pb-0 mb-0">
              <thead class="black white-text">
                <tr>
                  <th scope="col" class="owner-bg text-center text-white h5">Owner</th>
                </tr>
              </thead>
              </table>

              <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                <thead>
                  <tr>
                    <th class="text-center">Pre-mob/mob</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td class="p-0">
                      <table style="width:100%">
                        <tr>
                          <td class="ps-4" contenteditable="true">Yes</td>
                        </tr>
                      </table>
                    </td>

                  </tr>




                  <td class="p-0 float-start two-col-sm">
                    <table style="width:100%">
                      <tr>
                        <td class="ps-4 border-r two-col float-start" contenteditable="true"><span class="text-info">13 Apr</span></td>
                        <td class="ps-4 two-col float-start" contenteditable="true"><span class="text-info">4</span></td>
                      </tr>

                    </table>
                  </td>

                  <tr>
                    <td class="p-0">
                      <table style="width:100%">
                        <tr>
                          <td class="ps-4" contenteditable="true">NA</td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td class="p-0">
                      <table style="width:100%">
                        <tr>
                          <td class="ps-4" contenteditable="true">NA</td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                </tbody>
              </table>
              </div>

              <div id="table" class="table-editable">
                <table class="table pb-0 mb-0">
                <thead class="black white-text">
                  <tr>
                    <th scope="col" class="engineer-bg text-center text-white h5">Engineering</th>
                  </tr>
                </thead>
                </table>

                <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                  <thead>
                    <tr>
                      <th class="text-center">Parts Capturing Date</th>
                      <th class="text-center">Design & Engineering date</th>
                      <th class="text-center">DFAM+Build Prep</th>
                    </tr>
                  </thead>
                  <tbody>

                    <!-- This is our clonable table line -->
                    <tr>
                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>

                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>

                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>


                    </tr>

                    <tr>
                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>

                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>

                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>


                    </tr>
                    <!-- This is our clonable table line -->
                    <tr>
                      <td class="pt-3-half" contenteditable="true">NA</td>
                        <td class="pt-3-half" contenteditable="true">Yes</td>
                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                              <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                            </tr>
                            <tr>
                              <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                              <td class="pt-3-half four-col" contenteditable="true">4</td>
                            </tr>
                          </table>
                        </td>


                    </tr>
                    <!-- This is our clonable table line -->
                    <tr class="hide">
                      <td class="p-0">
                        <table style="width:100%">
                          <tr>
                            <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                            <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                          </tr>
                          <tr>
                            <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                            <td class="pt-3-half four-col" contenteditable="true">4</td>
                          </tr>
                        </table>
                      </td>
                        <td class="pt-3-half" contenteditable="true">Yes</td>

                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                              <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                            </tr>
                            <tr>
                              <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                              <td class="pt-3-half four-col" contenteditable="true">4</td>
                            </tr>
                          </table>
                        </td>



                    </tr>
                  </tbody>
                </table>
                </div>

                <div id="table" class="table-editable">
                  <table class="table pb-0 mb-0">
                  <thead class="black white-text">
                    <tr>
                      <th scope="col" class="quality-bg text-center text-white h5">Quality</th>
                    </tr>
                  </thead>
                  </table>

                  <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                    <thead>
                      <tr>
                        <th class="text-center">ITP + Manufacturing Document</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                              <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                            </tr>
                            <tr>
                              <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                              <td class="pt-3-half four-col" contenteditable="true">4</td>
                            </tr>
                          </table>
                        </td>
                      </tr>

                      <tr>
                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="ps-4" contenteditable="true">NA</td>
                            </tr>
                          </table>
                        </td>

                      </tr>

                      <tr>
                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                              <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                            </tr>
                            <tr>
                              <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                              <td class="pt-3-half four-col" contenteditable="true">4</td>
                            </tr>
                          </table>
                        </td>
                      </tr>

                      <tr>
                        <td class="p-0">
                          <table style="width:100%">
                            <tr>
                              <td class="ps-4" contenteditable="true">NA</td>
                            </tr>
                          </table>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  </div>


                  <div id="table" class="table-editable">
                    <table class="table pb-0 mb-0">
                    <thead class="black white-text">
                      <tr>
                        <th scope="col" class="owner-bg text-center text-white h5">Owner</th>
                      </tr>
                    </thead>
                    </table>

                    <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                      <thead>
                        <tr>
                          <th class="text-center">Client Update</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="p-0">
                            <table style="width:100%">
                              <tr>
                                <td class="pt-3-half inline-block ps-4" contenteditable="true"></td>

                              </tr>

                            </table>
                          </td>
                        </tr>

                        <tr>
                          <td class="p-0">
                            <table style="width:100%">
                              <tr>
                                <td class="pt-3-half inline-block ps-4" contenteditable="true"></td>

                              </tr>

                            </table>
                          </td>
                        </tr>

                        <tr>
                          <td class="p-0">
                            <table style="width:100%">
                              <tr>
                                <td class="pt-3-half inline-block ps-4" contenteditable="true"></td>

                              </tr>

                            </table>
                          </td>
                        </tr>

                        <tr>
                          <td class="p-0">
                            <table style="width:100%">
                              <tr>
                                <td class="ps-4" contenteditable="true">Yes</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>


                    <div id="table" class="table-editable">
                      <table class="table pb-0 mb-0">
                      <thead class="black white-text">
                        <tr>
                          <th scope="col" class="production-bg text-center text-white h5">Production</th>
                        </tr>
                      </thead>
                      </table>

                      <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                        <thead>
                          <tr>
                            <th class="text-center">3D Printing</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="p-0">
                              <table style="width:100%">
                                <tr>
                                  <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                  <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                </tr>
                                <tr>
                                  <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                  <td class="pt-3-half four-col" contenteditable="true">4</td>
                                </tr>
                              </table>
                            </td>
                          </tr>

                          <tr>
                            <td class="p-0">
                              <table style="width:100%">
                                <tr>
                                  <td class="ps-4" contenteditable="true">NA</td>
                                </tr>
                              </table>
                            </td>

                          </tr>

                          <tr>
                            <td class="p-0">
                              <table style="width:100%">
                                <tr>
                                  <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                  <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                </tr>
                                <tr>
                                  <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                  <td class="pt-3-half four-col" contenteditable="true">4</td>
                                </tr>
                              </table>
                            </td>
                          </tr>

                          <tr>
                            <td class="p-0">
                              <table style="width:100%">
                                <tr>
                                  <td class="ps-4" contenteditable="true">NA</td>
                                </tr>
                              </table>
                            </td>

                          </tr>

                        </tbody>
                      </table>
                      </div>


                      <div id="table" class="table-editable">
                        <table class="table pb-0 mb-0">
                        <thead class="black white-text">
                          <tr>
                            <th scope="col" class="owner-bg text-center text-white h5">Owner</th>
                          </tr>
                        </thead>
                        </table>

                        <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                          <thead>
                            <tr>
                              <th class="text-center">Client Update <br>date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="p-0">
                                <table style="width:100%">
                                  <tr>
                                    <td class="pt-3-half ps-4 space" contenteditable="true"></td>

                                  </tr>

                                </table>
                              </td>
                            </tr>

                            <tr>
                              <td class="p-0">
                                <table style="width:100%">
                                  <tr>
                                    <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                  </tr>

                                </table>
                              </td>
                            </tr>

                            <tr>
                              <td class="p-0">
                                <table style="width:100%">
                                  <tr>
                                    <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                  </tr>

                                </table>
                              </td>
                            </tr>

                            <tr>
                              <td class="p-0">
                                <table style="width:100%">
                                  <tr>
                                    <td class="ps-4" contenteditable="true">Yes</td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        </div>

                        <div id="table" class="table-editable">
                          <table class="table pb-0 mb-0">
                          <thead class="black white-text">
                            <tr>
                              <th scope="col" class="engineer-bg text-center text-white h5">Engineering</th>
                            </tr>
                          </thead>
                          </table>

                          <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                            <thead>
                              <tr>
                                <th class="text-center">Outsource Production</th>
                                <th class="text-center">Post Processing</th>
                                <th class="text-center">Assembly</th>
                              </tr>
                            </thead>
                            <tbody>

                              <!-- This is our clonable table line -->
                              <tr>
                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>

                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>

                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>


                              </tr>

                              <tr>
                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>

                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>

                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>


                              </tr>
                              <!-- This is our clonable table line -->
                              <tr>
                                <td class="pt-3-half" contenteditable="true">NA</td>
                                  <td class="pt-3-half" contenteditable="true">Yes</td>
                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                        <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                        <td class="pt-3-half four-col" contenteditable="true">4</td>
                                      </tr>
                                    </table>
                                  </td>


                              </tr>
                              <!-- This is our clonable table line -->
                              <tr class="hide">
                                <td class="p-0">
                                  <table style="width:100%">
                                    <tr>
                                      <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                      <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                    </tr>
                                    <tr>
                                      <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                      <td class="pt-3-half four-col" contenteditable="true">4</td>
                                    </tr>
                                  </table>
                                </td>
                                  <td class="pt-3-half" contenteditable="true">Yes</td>

                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">27 Apr</span></td>
                                        <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">2</span></td>
                                        <td class="pt-3-half four-col" contenteditable="true">4</td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>

                          <div id="table" class="table-editable">
                            <table class="table pb-0 mb-0">
                            <thead class="black white-text">
                              <tr>
                                <th scope="col" class="quality-bg text-center text-white h5">Quality</th>
                              </tr>
                            </thead>
                            </table>

                            <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                              <thead>
                                <tr>
                                  <th class="text-center">QC Testing</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                        <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                        <td class="pt-3-half four-col" contenteditable="true">4</td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="ps-4" contenteditable="true">NA</td>
                                      </tr>
                                    </table>
                                  </td>

                                </tr>

                                <tr>
                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                        <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                        <td class="pt-3-half four-col" contenteditable="true">4</td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="p-0">
                                    <table style="width:100%">
                                      <tr>
                                        <td class="ps-4" contenteditable="true">NA</td>
                                      </tr>
                                    </table>
                                  </td>

                                </tr>

                              </tbody>
                            </table>
                            </div>


                            <div id="table" class="table-editable">
                              <table class="table pb-0 mb-0">
                              <thead class="black white-text">
                                <tr>
                                  <th scope="col" class="quality-bg-2 text-center text-white h5">Quality</th> <th scope="col" class="owner-bg-2 text-center text-white h5">Owner</th>
                                </tr>
                              </thead>
                              </table>

                              <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                <thead>
                                  <tr>
                                    <th class="text-center">Fina Report + Estimation/ Data to customer</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="p-0">
                                      <table style="width:100%">
                                        <tr>
                                          <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                          <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                          <td class="pt-3-half four-col" contenteditable="true">4</td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td class="p-0">
                                      <table style="width:100%">
                                        <tr>
                                          <td class="ps-4" contenteditable="true">NA</td>
                                        </tr>
                                      </table>
                                    </td>

                                  </tr>

                                  <tr>
                                    <td class="p-0">
                                      <table style="width:100%">
                                        <tr>
                                          <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                          <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                        </tr>
                                        <tr>
                                          <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                          <td class="pt-3-half four-col" contenteditable="true">4</td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td class="p-0">
                                      <table style="width:100%">
                                        <tr>
                                          <td class="ps-4" contenteditable="true">NA</td>
                                        </tr>
                                      </table>
                                    </td>

                                  </tr>

                                </tbody>
                              </table>
                              </div>

                              <div id="table" class="table-editable">
                                <table class="table pb-0 mb-0">
                                <thead class="black white-text">
                                  <tr>
                                    <th scope="col" class="owner-bg text-center text-white h5">Owner</th>
                                  </tr>
                                </thead>
                                </table>

                                <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                  <thead>
                                    <tr>
                                      <th class="text-center">Client Update <br>date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="p-0">
                                        <table style="width:100%">
                                          <tr>
                                            <td class="pt-3-half ps-4 space" contenteditable="true"></td>

                                          </tr>

                                        </table>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="p-0">
                                        <table style="width:100%">
                                          <tr>
                                            <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                          </tr>

                                        </table>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="p-0">
                                        <table style="width:100%">
                                          <tr>
                                            <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                          </tr>

                                        </table>
                                      </td>
                                    </tr>

                                    <tr>
                                      <td class="p-0">
                                        <table style="width:100%">
                                          <tr>
                                            <td class="ps-4" contenteditable="true">Yes</td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                </div>

                                <div id="table" class="table-editable">
                                  <table class="table pb-0 mb-0">
                                  <thead class="black white-text">
                                    <tr>
                                      <th scope="col" class="finance-bg text-center text-white h5">Finance</th>
                                    </tr>
                                  </thead>
                                  </table>

                                  <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                    <thead>
                                      <tr>
                                        <th class="text-center">Cash    Collected</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="p-0">
                                          <table style="width:100%">
                                            <tr>
                                              <td class="pt-3-half ps-4 space" contenteditable="true"></td>

                                            </tr>

                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td class="p-0">
                                          <table style="width:100%">
                                            <tr>
                                              <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                            </tr>

                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td class="p-0">
                                          <table style="width:100%">
                                            <tr>
                                              <td class="pt-3-half space ps-4" contenteditable="true"></td>

                                            </tr>

                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td class="p-0">
                                          <table style="width:100%">
                                            <tr>
                                              <td class="ps-4 space" contenteditable="true">Paid</td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  </div>


                                  <div id="table" class="table-editable">
                                    <table class="table pb-0 mb-0">
                                    <thead class="black white-text">
                                      <tr>
                                        <th scope="col" class="production-bg text-center text-white h5">Production</th>
                                      </tr>
                                    </thead>
                                    </table>

                                    <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                      <thead>
                                        <tr>
                                          <th class="text-center">Final Delivery date</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="p-0">
                                            <table style="width:100%">
                                              <tr>
                                                <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                                <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                              </tr>
                                              <tr>
                                                <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                                <td class="pt-3-half four-col" contenteditable="true">4</td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td class="p-0">
                                            <table style="width:100%">
                                              <tr>
                                                <td class="ps-4" contenteditable="true">NA</td>
                                              </tr>
                                            </table>
                                          </td>

                                        </tr>

                                        <tr>
                                          <td class="p-0">
                                            <table style="width:100%">
                                              <tr>
                                                <td class="pt-3-half four-col border-b border-r" contenteditable="true"><span class="text-danger">20 Apr</span></td>
                                                <td class="pt-3-half four-col border-b" contenteditable="true">13 Apr</td>
                                              </tr>
                                              <tr>
                                                <td class="pt-3-half four-col border-r" contenteditable="true"><span class="text-danger">3</span></td>
                                                <td class="pt-3-half four-col" contenteditable="true">4</td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td class="p-0">
                                            <table style="width:100%">
                                              <tr>
                                                <td class="ps-4" contenteditable="true">NA</td>
                                              </tr>
                                            </table>
                                          </td>

                                        </tr>

                                      </tbody>
                                    </table>
                                    </div>

                                    <div id="table" class="table-editable">
                                      <table class="table pb-0 mb-0">
                                      <thead class="black white-text">
                                        <tr>
                                          <th scope="col" class="gray-bg text-center text-white h5">All departments</th>
                                        </tr>
                                      </thead>
                                      </table>

                                      <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                        <thead>
                                          <tr>
                                            <th class="text-center">Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="p-0">
                                              <table style="width:100%">
                                                <tr>
                                              <td class="vertical-y" contenteditable="true">
                                                <ol>
                                                  <li>solution pending</li>
                                                  <li>Fatigue test impeller </li>
                                                  <li>QC and shipping 4th part </li>
                                                     </ol>

                                                  </td>

                                                </tr>

                                              </table>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td class="p-0">
                                              <table style="width:100%">
                                                <tr>
                                                  <td class="vertical-y" contenteditable="true">
                                                    <ol>
                                                      <li>solution pending</li>
                                                      <li>Fatigue test impeller </li>
                                                      <li>QC and shipping 4th part </li>
                                                         </ol>

                                                      </td>

                                                </tr>

                                              </table>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td class="p-0">
                                              <table style="width:100%">
                                                <tr>
                                                  <td class="vertical-y" contenteditable="true">
                                                    <ol>
                                                      <li>solution pending</li>
                                                      <li>Fatigue test impeller </li>
                                                      <li>QC and shipping 4th part </li>
                                                         </ol>

                                                      </td>

                                                </tr>

                                              </table>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td class="p-0">
                                              <table style="width:100%">
                                                <tr>
                                                  <td class="vertical-y ps-4" contenteditable="true">
                                                    <span class="badge badge-pill badge-success">Delivered</span>

                                                      </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      </div>

                                      <div id="table" class="table-editable">
                                        <table class="table pb-0 mb-0">
                                        <thead class="black white-text">
                                          <tr>
                                            <th scope="col" class="graydark-bg text-center text-white h5">All departments</th>
                                          </tr>
                                        </thead>
                                        </table>

                                        <table class="table table-bordered table-responsive-md table-striped text-center th-head">
                                          <thead>
                                            <tr>
                                              <th class="text-center">Lessons learnd </th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td class="p-0">
                                                <table style="width:100%">
                                                  <tr>
                                                    <td class="vertical-y" contenteditable="true"><span class="text-danger">Prototype design deffect </span></td>

                                                  </tr>

                                                </table>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td class="p-0">
                                                <table style="width:100%">
                                                  <tr>
                                                    <td class="vertical-y contenteditable="true"></td>

                                                  </tr>

                                                </table>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td class="p-0">
                                                <table style="width:100%">
                                                  <tr>
                                                    <td class="vertical-y" contenteditable="true"></td>

                                                  </tr>

                                                </table>
                                              </td>
                                            </tr>

                                            <tr>
                                              <td class="p-0">
                                                <table style="width:100%">
                                                  <tr>
                                                    <td class="ps-4" contenteditable="true">Paid</td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        </div>

      </div>
    </div>
      <button class="float-end full-view" onclick="var el = document.getElementById('element'); el.requestFullscreen();">
        <i class="bi bi-fullscreen"></i> <br>Full view
      </button>
    </div>

  </div>
</div>
<!-- Editable table -->

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>
  </main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pathum/Downloads/RES/project-001/resources/views/index.blade.php ENDPATH**/ ?>