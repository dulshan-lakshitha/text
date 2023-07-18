<?php $__env->startSection('content'); ?>

<style>
    .tbl-cell {
        height: 130px;

    }

    .date-col {
        width: 120px;
    }
</style>
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

                            <span class="badge bg-success">30-05-2023 </span> Last update: 1 day ago

                        </div>
                    </div>

                    <div class="col-xxl-4 col-md-4">
                        <div class="card-dashboard text-end">

                            <a class="btn btn-info me-3" href="/add-new-sale-ui"><i class="bi bi-plus-lg"></i>Add
                                New</a>
                            <a class="btn btn-info" href="/"><i>Cancel</i></a>
                            

                        </div>
                    </div>

                    <!-- Editable table -->
                    <div class="card pt-4 mt-3">

                        <div class="card-body">
                            <div class="element" id="element">

                                <div id="table" class="table-editable first-view outer-wrapper float-start ">

                                    <table class="table pb-0 mb-0">
                                        <thead class="black white-text">
                                            <tr>
                                                <th scope="col" class="sales-bg text-center text-white h5">Sales</th>
                                            </tr>
                                        </thead>
                                    </table>

                                    <table
                                        class="table table-bordered table-responsive-md table-striped text-center th-head">
                                        <thead>
                                            <tr class="tbl-cell">
                                                <th class="text-center p-2">Delete</th>
                                                <th class="text-center">SO</th>
                                                <th class="text-center">Sales</th>
                                                <th class="text-center date-col">PO date</th>
                                                <th class="text-center">Customer Name</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="tbl-cell">
                                                <td class="p-0">
                                                    <button type="button" class="btn btn_delete_sale"
                                                        data-id="<?php echo e($sa->id); ?>"><i class="bi bi-trash3 "></i></button>
                                                </td>
                                                <td class="pt-3-half tbl_cell " contenteditable="true"
                                                    data-id="<?php echo e($sa->id); ?>" data-col_name="so">
                                                    <?php echo e($sa->so); ?>

                                                </td>
                                                <td class="pt-3-half tbl_cell " contenteditable="true"
                                                    data-id="<?php echo e($sa->id); ?>" data-col_name="salesman">
                                                    <?php echo e($sa->salesman); ?>

                                                </td>
                                                <td class="pt-3-half tbl_cell" contenteditable="true"
                                                    data-id="<?php echo e($sa->id); ?>" data-col_name="po_date">
                                                    <?php echo e($sa->po_date); ?>

                                                </td>

                                                <td class="pt-3-half tbl_cell" contenteditable="true"
                                                    data-id="<?php echo e($sa->id); ?>" data-col_name="customer_name">
                                                    <?php echo e($sa->customer_name); ?>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="outer-wrapper">
                                    <div class="inner-wrapper">

                                        <div id="table" class="table-editable ">

                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col"
                                                            class="sales-bg text-center text-white h5 first-col-bg">
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Country</th>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Strategic Contract</th>
                                                        <th class="text-center">Advance payment</th>
                                                        <th class="text-center">Owner</th>
                                                        <th class="text-center ">Client Update
                                                            Date</th>
                                                        <th class="text-center date-col">SO Locked Date</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="pt-3-half tbl_cell" contenteditable="true">

                                                            <select
                                                                class="form-select no-border border-bottom space_t country_list "
                                                                aria-label="Default select example"
                                                                data-id="<?php echo e($sa->id); ?>">
                                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($sa->country_id == $country->id): ?>
                                                                <option value="<?php echo e($country->id); ?>" selected><?php echo e($country->name); ?>

                                                                </option>
                                                                <?php else: ?>
                                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?>

                                                                </option>
                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="type">
                                                            <?php echo e($sa->type); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="strategic_contract">
                                                            <?php echo e($sa->strategic_contract); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="advanced_payment">
                                                            <?php echo e($sa->advanced_payment); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="owner">
                                                            <?php echo e($sa->owner); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>"
                                                            data-col_name="client_update_date_01">
                                                            <?php echo e($sa->client_update_date_01); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="so_locked_date">
                                                            <?php echo e($sa->so_locked_date); ?>

                                                        </td>
                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="owner-bg text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center date-col">Execution Plan Discharge date
                                                        </th>
                                                        <th class="text-center date-col">Client Update</th>
                                                        <th class="text-center date-col">Client KOM date</th>
                                                        <th class="text-center">Part Info From Client</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>"
                                                            data-col_name="execution_plan_discharge_date">
                                                            <?php echo e($sa->execution_plan_discharge_date); ?>

                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>"
                                                            data-col_name="client_update_date_02">
                                                            <?php echo e($sa->client_update_date_02); ?>


                                                        </td>
                                                        <td class="pt-3-half tbl_cell" contenteditable="true"
                                                            data-id="<?php echo e($sa->id); ?>" data-col_name="client_kom_date">
                                                            <?php echo e($sa->client_kom_date); ?>


                                                        </td>
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="part_info_from_client_actual_date">
                                                                        <?php echo e($sa->part_info_from_client_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="part_info_from_client_target_date">
                                                                        <?php echo e($sa->part_info_from_client_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="part_info_from_client_actual_qty">
                                                                        <?php echo e($sa->part_info_from_client_actual_qty); ?>

                                                                        <span class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="part_info_from_client_target_qty">
                                                                        <?php echo e($sa->part_info_from_client_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="production-bg text-center text-white h5">
                                                            Production
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Raw Material Outsource</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>




                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="raw_matel_outsource_actual_date">
                                                                        <?php echo e($sa->raw_matel_outsource_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="raw_matel_outsource_target_date">
                                                                        <?php echo e($sa->raw_matel_outsource_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="raw_matel_outsource_actual_qty">
                                                                        <?php echo e($sa->raw_matel_outsource_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="raw_matel_outsource_target_qty">
                                                                        <?php echo e($sa->raw_matel_outsource_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="engineer-bg text-center text-white h5">
                                                            Engineering
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Initial Assesmente</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">

                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="initial_assesment_actual_date">
                                                                        <?php echo e($sa->initial_assesment_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="initial_assesment_target_date">
                                                                        <?php echo e($sa->initial_assesment_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="initial_assesment_actual_qty">
                                                                        <?php echo e($sa->initial_assesment_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="initial_assesment_target_qty">
                                                                        <?php echo e($sa->initial_assesment_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="owner-bg text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Pre-mob/mob</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="pre_mob_actual_date"> <?php echo e($sa->pre_mob_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="pre_mob_target_date"> <?php echo e($sa->pre_mob_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="pre_mob_actual_qty"> <?php echo e($sa->pre_mob_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="pre_mob_target_qty"> <?php echo e($sa->pre_mob_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="engineer-bg text-center text-white h5">
                                                            Engineering
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center"> Parts Capturing Date</th>
                                                        <th class="text-center"> Design & Engineering date</th>
                                                        <th class="text-center"> DFAM+Build Prep</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- This is our clonable table line -->

                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="parts_capturing_actual_date">
                                                                        <?php echo e($sa->parts_capturing_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="parts_capturing_target_date">
                                                                        <?php echo e($sa->parts_capturing_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="parts_capturing_actual_qty">
                                                                        <?php echo e($sa->parts_capturing_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="parts_capturing_target_qty">
                                                                        <?php echo e($sa->parts_capturing_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>

                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="design_engineering_actual_date">
                                                                        <?php echo e($sa->design_engineering_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="design_engineering_target_date">
                                                                        <?php echo e($sa->design_engineering_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="design_engineering_actual_qty">
                                                                        <?php echo e($sa->design_engineering_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="design_engineering_target_qty">
                                                                        <?php echo e($sa->design_engineering_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>

                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="dfam_build_prep_actual_date">
                                                                        <?php echo e($sa->dfam_build_prep_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="dfam_build_prep_target_date">
                                                                        <?php echo e($sa->dfam_build_prep_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="dfam_build_prep_actual_qty">
                                                                        <?php echo e($sa->dfam_build_prep_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="dfam_build_prep_target_qty">
                                                                        <?php echo e($sa->dfam_build_prep_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="quality-bg text-center text-white h5">
                                                            Quality</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">ITP + Manufacturing Document</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="itp_manufacturing_document_actual_date">
                                                                        <?php echo e($sa->itp_manufacturing_document_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="itp_manufacturing_document_target_date">
                                                                        <?php echo e($sa->itp_manufacturing_document_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="itp_manufacturing_document_actual_qty">
                                                                        <?php echo e($sa->itp_manufacturing_document_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="itp_manufacturing_document_target_qty">
                                                                        <?php echo e($sa->itp_manufacturing_document_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="owner-bg text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Client Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="client_update_date_03">
                                                                        <?php echo e($sa->client_update_date_03); ?>

                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="production-bg text-center text-white h5">
                                                            Production
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">3D Printing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="_3d_printing_actual_date">
                                                                        <?php echo e($sa->_3d_printing_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="_3d_printing_target_date">
                                                                        <?php echo e($sa->_3d_printing_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="_3d_printing_actual_qty">
                                                                        <?php echo e($sa->_3d_printing_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="_3d_printing_target_qty">
                                                                        <?php echo e($sa->_3d_printing_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="owner-bg text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Client Update <br>date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="client_update_date_04">
                                                                        <?php echo e($sa->client_update_date_04); ?>

                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="engineer-bg text-center text-white h5">
                                                            Engineering
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Outsource Production</th>
                                                        <th class="text-center">Post Processing</th>
                                                        <th class="text-center">Assembly</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- This is our clonable table line -->
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="outsource_production_actual_date">
                                                                        <?php echo e($sa->outsource_production_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="outsource_production_target_date">
                                                                        <?php echo e($sa->outsource_production_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="outsource_production_actual_qty">
                                                                        <?php echo e($sa->outsource_production_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="outsource_production_target_qty">
                                                                        <?php echo e($sa->outsource_production_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="post_processing_actual_date">
                                                                        <?php echo e($sa->post_processing_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="post_processing_target_date">
                                                                        <?php echo e($sa->post_processing_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="post_processing_actual_qty">
                                                                        <?php echo e($sa->post_processing_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="post_processing_target_qty">
                                                                        <?php echo e($sa->post_processing_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="assembly_actual_date">
                                                                        <?php echo e($sa->assembly_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="assembly_target_date">
                                                                        <?php echo e($sa->assembly_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="assembly_actual_qty">
                                                                        <?php echo e($sa->assembly_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="assembly_target_qty">
                                                                        <?php echo e($sa->assembly_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="quality-bg text-center text-white h5">
                                                            Quality</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">QC Testing</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="qc_testing_actual_date">
                                                                        <?php echo e($sa->qc_testing_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="qc_testing_target_date">
                                                                        <?php echo e($sa->qc_testing_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="qc_testing_actual_qty">
                                                                        <?php echo e($sa->qc_testing_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="qc_testing_target_qty">
                                                                        <?php echo e($sa->qc_testing_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="quality-bg-2 text-center text-white h5">
                                                            Quality</th>
                                                        <th scope="col" class="owner-bg-2 text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Fina Report + Estimation/ Data to
                                                            customer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_rep_estimation_data_to_customer_actual_date">
                                                                        <?php echo e($sa->final_rep_estimation_data_to_customer_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_rep_estimation_data_to_customer_target_date">
                                                                        <?php echo e($sa->final_rep_estimation_data_to_customer_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_rep_estimation_data_to_customer_actual_qty">
                                                                        <?php echo e($sa->final_rep_estimation_data_to_customer_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_rep_estimation_data_to_customer_target_qty">
                                                                        <?php echo e($sa->final_rep_estimation_data_to_customer_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="owner-bg text-center text-white h5">
                                                            Owner</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Client Update <br>date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="client_update_date_05">
                                                                        <?php echo e($sa->client_update_date_05); ?>

                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="finance-bg text-center text-white h5">
                                                            Finance</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Cash Collected</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="cash_collected">
                                                                        <?php echo e($sa->cash_collected); ?>

                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="production-bg text-center text-white h5">
                                                            Production
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Final Delivery date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_delivery_actual_date">
                                                                        <?php echo e($sa->final_delivery_actual_date); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-b border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_delivery_target_date">
                                                                        <?php echo e($sa->final_delivery_target_date); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_delivery_actual_qty">
                                                                        <?php echo e($sa->final_delivery_actual_qty); ?><span
                                                                            class="text-danger"></span>
                                                                    </td>
                                                                    <td class="pt-3-half tbl_cell four-col border-r"
                                                                        contenteditable="true" data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="final_delivery_target_qty">
                                                                        <?php echo e($sa->final_delivery_target_qty); ?><span
                                                                            class="text-dark"></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="gray-bg text-center text-white h5">
                                                            All departments</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>" data-col_name="actions">
                                                                        <?php $__currentLoopData = explode(',', $sa->actions); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><?php echo e($ac); ?></li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        
                                                                    </td>
                                                                </tr>

                                                                

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div id="table" class="table-editable">
                                            <table class="table pb-0 mb-0">
                                                <thead class="black white-text">
                                                    <tr>
                                                        <th scope="col" class="graydark-bg text-center text-white h5">
                                                            All
                                                            departments</th>
                                                    </tr>
                                                </thead>
                                            </table>

                                            <table
                                                class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                <thead>
                                                    <tr class="tbl-cell">
                                                        <th class="text-center">Lessons learnd </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="tbl-cell">
                                                        <td class="p-0">
                                                            <table style="width:100%">

                                                                <tr>
                                                                    <td class="ps-4" contenteditable="true"
                                                                        data-id="<?php echo e($sa->id); ?>"
                                                                        data-col_name="lessons_learnd">
                                                                        <?php echo e($sa->lessons_learnd); ?>

                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <button class="float-end full-view"
                                    onclick="var el = document.getElementById('element'); el.requestFullscreen();">
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

<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>


    $(".btn_delete_sale").click(
        function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //data to submit
                    var data = {
                        id: $(this).data("id"),
                    };

                    $.ajax({
                        url: "/delete-sale",
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                            Accept: "application/json",
                        },
                        data: data,
                        success: function (response) {
                            location.reload();
                        },
                        error: function () {
                            Swal.fire(
                                'Error!',
                                'Delete Sale Error',
                                'error'
                            )



                        },
                    });




                }
            })
        }
    );


    $(".tbl_cell").keyup(function (e) {

        //data to submit
        var sales_data = {
            id: $(this).data("id"),
            col_name: $(this).data("col_name"),
            value: $.trim($(this).text()),
        };

        $.ajax({
            url: "/live_update_sale",
            type: "PUT",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
                Accept: "application/json",
            },
            data: sales_data,
            success: function (response) {
                Swal.fire({
                    toast: true,
                    icon: 'success',
                    title: 'Record Updated Successfully',
                    animation: false,
                    position: 'bottom',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
            },
            error: function () {
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: 'Update Sale Error',
                    animation: false,
                    position: 'bottom',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
            },
        });
    });


    $(".country_list").change(function (e) {

        //data to submit
        var sales_data = {
            id: $(this).data("id"),
            col_name: 'country_id',
            value: $.trim($(this).find(":selected").val()),
        };

        $.ajax({
            url: "/live_update_sale",
            type: "PUT",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                    "content"
                ),
                Accept: "application/json",
            },
            data: sales_data,
            success: function (response) {

            },
            error: function () {
                Swal.fire(
                    'Error!',
                    'Update Sale Error',
                    'error'
                )
            },
        });
    });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\app_0.1\app\resources\views/index.blade.php ENDPATH**/ ?>