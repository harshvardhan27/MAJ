<?php $__env->startSection('title', 'Sub Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Sub Category</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Sub Category</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Sub Category Table</h5>
                        <div class="ibox-tools">
                        <span id="createRecord" title="Click here to create new category">
                            <a href="<?php echo e(route('subcategory.create')); ?>" class="text-primary create">Create New</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover" id="dtSubCategory">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td width="40%"><?php echo e($subcategory->category->name); ?></td>
                                        <td width="40%"><?php echo e($subcategory->name); ?></td>
                                        <td width="20%"><a
                                                    href="<?php echo e(route('subcategory.edit',['id' => $subcategory->id])); ?>"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</a>&nbsp;<strong>|</strong>&nbsp;<a
                                                    href="<?php echo e(route('subcategory.delete',['id' => $subcategory->id])); ?>"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtSubCategory').DataTable({
                //"ajax": ,
                "pageLength": 5,
                "responsive": true,
                "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]],
                "dom": '<"html5buttons"B>lTfgitp',
                "buttons": [
                    {extend: 'copy'},
                    {extend: 'csv', title: 'Sub Category_File'},
                    {extend: 'excel', title: 'Sub Category_File'},
                    {extend: 'pdf', title: 'Sub Category_File'},
                    {
                        extend: 'print',
                        customize: function (win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ],
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>