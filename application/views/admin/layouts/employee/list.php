<div class="row" id="employee-list">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Employees </span>
                </div>
            </div>
            <?php
            if (!empty($this->session->flashdata('message'))) {
                echo '<div class="alert alert-success alert-dismissable">' . $this->session->flashdata('message') . '</div>';
            }
            ?>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="<?php echo base_url("employee/add"); ?>" id="add-employee" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <?php
                        if (!empty($this->session->flashdata('message'))) {
                            echo $this->session->flashdata('item');
                        }
                        ?>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="tbl-employee-list">
                    <thead>
                        <tr>
                            <th> Employee Name </th>
                            <th> Station </th>
                            <th> Department </th>
                            <th> Type </th>
                            <th> Category</th>
                            <th> Designation</th>
                            <th> Joining Date</th>
                            <th> Approval Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($employees)) {
                            foreach ($employees as $employee) {
                                ?>
                                <tr class="odd gradeX">
                                    <td> <?php echo $employee->first_name . " " . $employee->last_name; ?> </td>
                                    <td> <?php echo $employee->station; ?> </td>
                                    <td> <?php echo $employee->department; ?> </td>
                                    <td> <?php echo $employee->type; ?> </td>
                                    <td> <?php echo $employee->category; ?> </td>
                                    <td> <?php echo $employee->designation; ?> </td>
                                    <td> <?php echo $employee->created_at; ?> </td>
                                    <td>           
                                        <?php
                                        if ($employee->status == 1) {
                                            echo "<span class=\"label label-sm label-info\">Approved</span>";
                                        } elseif ($employee->status == 0) {
                                            echo "<span class=\"label label-sm label-warning\">Pending</span>";
                                        }
                                        ?>  
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>