<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>

<body>
    <table>
        <tr>
            <th>SO</th>
            <th>Customer</th>
            <th>Country</th>
            <th>Date</th>
        </tr>
        <tr>
            <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <td><?php echo e($sale->so); ?></td>
                <td><?php echo e($sale->customer); ?></td>
                <td><?php echo e($sale->country->name); ?></td>
                <td><?php echo e($sale->date); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <td colspan="4">No sales found</td>
            <?php endif; ?>
        </tr>
    </table>
</body>

</html>
<?php /**PATH /home/pathum/Desktop/server data/laravel/test/project-001/resources/views/index.blade.php ENDPATH**/ ?>