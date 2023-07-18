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

                                <span class="badge bg-success">30-05-2023 </span> Last update: 1 day ago

                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4">
                            <div class="card-dashboard text-end">

                                <a class="btn btn-info me-3"    href="/add-new-sale-ui"><i class="bi bi-plus-lg"></i>Add New</a>
                                 <button type="button"
                                    class="btn btn-info" href="#" role="button">Cancel</button>
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
                                                <tr>
                                                    <th class="text-center p-2">Delete</th>
                                                    <th class="text-center">SO</th>
                                                    <th class="text-center">Sales</th>
                                                    <th class="text-center">PO date</th>
                                                    <th class="text-center">Customer Name</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="p-0"><button type="button" class="btn"><i
                                                                    class="bi bi-trash3"></i></button></td>
                                                        <td class="pt-3-half" contenteditable="true"><?php echo e($sa->so); ?>

                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true"><?php echo e($sa->sales); ?>

                                                        </td>
                                                        <td class="pt-3-half" contenteditable="true">
                                                            <?php echo e(date_format(date_create($sa->date), 'Y-m-d')); ?></td>
                                                        
                                                        
                                                        <td class="pt-3-half" contenteditable="true"><?php echo e($sa->customer); ?>

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
                                                        <tr>
                                                            <th class="text-center">Country</th>
                                                            <th class="text-center">Type</th>
                                                            <th class="text-center">Strategic Contract</th>
                                                            <th class="text-center">Advance payment</th>
                                                            <th class="text-center">Owner</th>
                                                            <th class="text-center">Client Update Date</th>
                                                            <th class="text-center">SO Locked Date</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->country->name); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->type); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->strategic); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->ad_pay); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->owner->name); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e(date_format(date_create($sa->client_update_date), 'Y-m-d')); ?>

                                                                </td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e(date_format(date_create($sa->so_locked_date), 'Y-m-d')); ?>

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
                                                        <tr>
                                                            <th class="text-center">Execution Plan Discharge date</th>
                                                            <th class="text-center">Client Update</th>
                                                            <th class="text-center">Client KOM date</th>
                                                            <th class="text-center">Part Info From Client</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e(date_format(date_create($sa->ex_plan_date), 'Y-m-d')); ?>

                                                                </td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e($sa->client_update); ?></td>
                                                                <td class="pt-3-half" contenteditable="true">
                                                                    <?php echo e(date_format(date_create($sa->client_KOM_date), 'Y-m-d')); ?>

                                                                </td>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->partinfo->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->partinfo->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->partinfo->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->partinfo->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="production-bg text-center text-white h5">Production
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Raw Material Outsource</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->rawmatel->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->rawmatel->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->rawmatel->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->rawmatel->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="engineer-bg text-center text-white h5">Engineering
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Initial Assesmente</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->initial->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->initial->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->initial->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->initial->target_part); ?></span>
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
                                                        <tr>
                                                            <th class="text-center">Pre-mob/mob</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->premob->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->premob->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->premob->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->premob->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="engineer-bg text-center text-white h5">Engineering
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Parts Capturing Date</th>
                                                            <th class="text-center">Design & Engineering date</th>
                                                            <th class="text-center">DFAM+Build Prep</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- This is our clonable table line -->
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->partscap->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->partscap->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->partscap->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->partscap->target_part); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>

                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->design->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->design->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->design->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->design->target_part); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>

                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->dfam->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->dfam->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->dfam->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->dfam->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="quality-bg text-center text-white h5">Quality</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ITP + Manufacturing Document</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->itp->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->itp->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->itp->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->itp->target_part); ?></span>
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
                                                        <tr>
                                                            <th class="text-center">Client Update</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">

                                                                        <tr>
                                                                            <td class="ps-4" contenteditable="true">
                                                                                <?php echo e($sa->client_update_sec); ?></td>
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
                                                            <th scope="col"
                                                                class="production-bg text-center text-white h5">Production
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">3D Printing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->printing->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->printing->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->printing->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->printing->target_part); ?></span>
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
                                                        <tr>
                                                            <th class="text-center">Client Update <br>date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">

                                                                        <tr>
                                                                            <td class="ps-4" contenteditable="true">
                                                                                <?php echo e($sa->client_update_thi); ?></td>
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
                                                            <th scope="col"
                                                                class="engineer-bg text-center text-white h5">Engineering
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Outsource Production</th>
                                                            <th class="text-center">Post Processing</th>
                                                            <th class="text-center">Assembly</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- This is our clonable table line -->
                                                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->out->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->out->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->out->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->out->target_part); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>

                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->post->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->post->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->post->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->post->target_part); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>

                                                                <td class="p-0">
                                                                    <table style="width:100%">
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e(date_format(date_create($sa->assem->act_date), 'm-d')); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-b border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e(date_format(date_create($sa->assem->target_date), 'm-d')); ?></span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-danger"><?php echo e($sa->assem->act_part); ?></span>
                                                                            </td>
                                                                            <td class="pt-3-half four-col border-r"
                                                                                contenteditable="true"><span
                                                                                    class="text-dark"><?php echo e($sa->assem->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="quality-bg text-center text-white h5">Quality</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">QC Testing</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e(date_format(date_create($sa->qc->act_date), 'm-d')); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e(date_format(date_create($sa->qc->target_date), 'm-d')); ?></span>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e($sa->qc->act_part); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e($sa->qc->target_part); ?></span>
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
                                                            <th scope="col"
                                                                class="quality-bg-2 text-center text-white h5">Quality</th>
                                                            <th scope="col"
                                                                class="owner-bg-2 text-center text-white h5">Owner</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Fina Report + Estimation/ Data to
                                                                customer</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e(date_format(date_create($sa->finalrep->act_date), 'm-d')); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e(date_format(date_create($sa->finalrep->target_date), 'm-d')); ?></span>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e($sa->finalrep->act_part); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e($sa->finalrep->target_part); ?></span>
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
                                                        <tr>
                                                            <th class="text-center">Client Update <br>date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">

                                                                  <tr>
                                                                      <td class="ps-4" contenteditable="true">
                                                                          <?php echo e($sa->client_update_for); ?></td>
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
                                                            <th scope="col"
                                                                class="finance-bg text-center text-white h5">Finance</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Cash Collected</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">

                                                                  <tr>
                                                                      <td class="ps-4" contenteditable="true">
                                                                          <?php echo e($sa->cash); ?></td>
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
                                                            <th scope="col"
                                                                class="production-bg text-center text-white h5">Production
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Final Delivery date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e(date_format(date_create($sa->finaldate->act_date), 'm-d')); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-b border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e(date_format(date_create($sa->finaldate->target_date), 'm-d')); ?></span>
                                                                      </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-danger"><?php echo e($sa->finaldate->act_part); ?></span>
                                                                      </td>
                                                                      <td class="pt-3-half four-col border-r"
                                                                          contenteditable="true"><span
                                                                              class="text-dark"><?php echo e($sa->finaldate->target_part); ?></span>
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
                                                        <tr>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">

                                                                  <tr>
                                                                      <td class="ps-4" contenteditable="true">
                                                                          <?php echo e($sa->action); ?></td>
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
                                                            <th scope="col"
                                                                class="graydark-bg text-center text-white h5">All
                                                                departments</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <table
                                                    class="table table-bordered table-responsive-md table-striped text-center th-head">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Lessons learnd </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                      <tr>
                                                          <td class="p-0">
                                                              <table style="width:100%">

                                                                  <tr>
                                                                      <td class="ps-4" contenteditable="true">
                                                                          <?php echo e($sa->lessons); ?></td>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dlakshitha\Desktop\GUI\project\resources\views/index.blade.php ENDPATH**/ ?>