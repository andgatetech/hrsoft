<div class="row" id="employee-add">
    <form role="form" method="POST" action="<?php echo base_url("employee/add_process"); ?>">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase"> Employee Information</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="form-group">
                            <label>Company</label>
                            <select name="company" class="form-control">
                                <?php
                                foreach ($companies as $company) {
                                    echo "<option value='" . $company->id . "'>" . $company->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Station</label>
                            <select name="station" class="form-control">
                                <?php
                                foreach ($stations as $station) {
                                    echo "<option value='" . $station->id . "'>" . $station->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <select name="department" class="form-control">
                                <?php
                                foreach ($departments as $department) {
                                    echo "<option value='" . $department->id . "'>" . $department->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Employee Type</label>
                            <select name="employee_type" class="form-control">
                                <?php
                                foreach ($employeeTypes as $employeeType) {
                                    echo "<option value='" . $employeeType->id . "'>" . $employeeType->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Employee Category</label>
                            <select name="employee_category" class="form-control">
                                <?php
                                foreach ($employeeCategories as $employeeCategory) {
                                    echo "<option value='" . $employeeCategory->id . "'>" . $employeeCategory->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Designation/Job Title</label>
                            <select name="designation" class="form-control">
                                <?php
                                foreach ($employeeDesignations as $employeeDesignation) {
                                    echo "<option value='" . $employeeDesignation->id . "'>" . $employeeDesignation->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Grade</label>
                            <select name="grade" class="form-control">
                                <?php
                                foreach ($grades as $grade) {
                                    echo "<option value='" . $grade->id . "'>" . $grade->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Work Shift</label>
                            <select name="work_shift" class="form-control">
                                <?php
                                foreach ($workShifts as $workShift) {
                                    echo "<option value='" . $workShift->id . "'>" . $workShift->name . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-settings font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase"> Employee Personal Information</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <div class="form-body">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control input-sm" placeholder=""> 
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control input-sm" placeholder=""> 
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input name="birth_date" class="form-control input-sm date-picker" size="16" type="text" value="">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Blood Group</label>
                            <select name="blood_group" class="form-control">
                                <option>Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nationality</label>
                            <select name="nationality" class="form-control">
                                <option>Select Nationality</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="China">China</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Religion</label>
                            <select name="religion" class="form-control">
                                <option>Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduism">Hinduism</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Marital Status</label>
                            <select name="marital_status" class="form-control">
                                <option>Select Marital Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">Save</button>
                        <a href="<?php echo base_url("employee/employeeList");?>" type="button" class="btn default">Cancel</a>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </form>
</div>