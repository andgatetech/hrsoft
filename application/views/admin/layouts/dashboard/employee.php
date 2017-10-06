<div class="row">
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase">Total Employees (<span id="count-total-empl"></span>)</span>
                </div>
            </div>
            <div class="portlet-body">
                <!--                <h4>Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).</h4>-->
                <canvas id="chart-total-employee"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase">Active Employees (<span id="count-active-empl"></span>)</span>
                </div>
            </div>
            <div class="portlet-body">
                <!--                <h4>Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).</h4>-->
                <canvas id="chart-active-employee"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase">Inactive Employees (<span id="count-inactive-empl"></span>)</span>
                </div>  
            </div>
            <div class="portlet-body">
                <!--                <h4>Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).</h4>-->
                <canvas id="chart-inactive-employee" class="chart"> </canvas>
            </div>
        </div>
    </div>
</div>
