<?php
include "header.php";

?>
<body>
    <style>
.main-container {
  grid-area: main;
  overflow-y: auto;
  padding: 20px 20px;
  
}

.main-title {
  display: flex;
  justify-content:space-between;
}
.main-title .p {
   font-size: 10px;
}

.main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin:20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 30px;
  margin: 35px;
  background-color: #ffffff;
  box-sizing: border-box;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child {
  border-left: 7px solid #246dec;
}

.card:nth-child(2) {
  border-left: 7px solid #f5b7af;
}
.card:nth-child(3) {
  border-left: 7px solid #367952;
}

.card:nth-child(4) {
  border-left: 7px solid #cc3c43;
}

.card > span{
  font-size: 20px;
  font-weight: 600;
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between ;
}

.card-inner > p {
  font-size: 10px;
}

.card-inner > span {
  font-size: 35px;
}

.charts {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap:20px;
}
.charts-card {
    background-color: #ffffff;
    margin-bottom: 20px;
    padding: 25px;
    box-sizing: border-box;
    -webkit-column-break-inside: avoid;
    border: 1px solid #d2d2d3;
    border-radius: 5px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}
.charts-title {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    font-weight:600; 
}
/*pie chart styling*/
.wrapper{
    display: flex;
    align-items: center;
    justify-content: center;
}

.pie-wrap{
    border: 2px solid lightgrey;
    width: 400px;
    height: 400px;
    margin: 5% 20px;
    position: relative;
    border-radius: 50%;
    color: black;
    overflow: hidden;
    background-color:black;
    background: conic-gradient(red 0 12%, skyblue 0 7%, green 0 1% wheat 0 0% )
}

.pie-wrap .entry{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* *the individual entries* */

.sky-blue{
    background-color: lightskyblue;
    height:50%;
    width: 50%;
    display: block;
}

.red{
    background-color: red;
    height:50%;
    width: 50%;
}
.green{
    background-color: limegreen;
    height:50%;
    width: 50%;
    right: 0;
    top: 50%;
    position: absolute;
    clip-path:polygon(0% 0%, 100% 0%, 100% 100%);
}

.wheat{
    background-color: wheat;
    height:50%;
    width: 50%;
    right: 0;
    top: 50%;
    position: absolute;
    clip-path:polygon(0% 0%, 100% 100%, 0% 100%);
}

.pie-wrap .green p:first-child{
    top: 0px;
}

.pie-wrap .wheat p{
    position: absolute;
    left: 20px;
    top: 80px;
}

.pie-wrap .wheat{
    justify-content: flex-start;
}

.pie-wrap .wheat p:first-child{
    top: 100px;
}

.entry .entry-value{
    display: none;
    transition: all 500ms linear;
}
.entry:hover .entry-value{
    display: block;
}

.entry{
    transition: all 500ms linear ;
}
.entry:hover{
    filter: invert();
}

.key-wrap label{
    display: block;
    border: 1px solid;
    width: 50px;
    text-align: center;
    padding: 10px 15px;
    cursor: pointer;
    margin-bottom: 8px;
    }
input[type="radio"]{
    display: none;
}
.red-label{
    background-color: red;
}

.green-label{
    background-color: limegreen;
}
.wheat-label{
    background-color: wheat;
}
.blue-label{
    background-color: skyblue;
}



</style>
<?php
include "header.php";

?>


 <div class="container mt-2">
        <div class="row">
            <div class="col-sm-12">
               <!-- <div class="col-sm-10">-->
                <div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class= "offcanvas-body p-0">
                        <nav class="navbar-dark">
                            <ul class="navbar-nav">
                                <li>
                                    <div class="text-muted small fw-bold text-uppercase px-3 mt-4">
                                        CoreSection
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class = "nav-link px-3 active">
                                        <span class="me-2"><i class="bi bi-dribbble"></i></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="my-4">
                                    <hr class="dropdown-divider" />
                                </li>
                                    <li>
                                        <div class="text-muted small fw-bold text-uppercase px-3"><i class="bi bi-people-fill"></i> 
                                            <span>Employees</span>
                                        </div>     
                                    </li>
                                    <a 
                                        class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" 
                                        href="#collapseExample" role="button" aria-expanded="false" 
                                        aria-controls="collapseExample">
                                        <span class="me-2"><i  class="bi bi-building-fill-check"></i></span>
                                        <span>Payroll</span>
                                        <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span> <!--collapse function-->
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                            <div>
                                               <ul class="navbar-nav ps-3">
                                                    <li>
                                                        <a href="#" class="nav-link px-3">
                                                            <span class="me-2"></span>
                                                            <span class="me-2"><i class="bi bi-calendar-date"></i></span>
                                                            <span>Calender</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="nav-link px-3">
                                                            <span class="me-2"></span>
                                                            <span class="me-2"><i class="bi bi-calendar-date"></i></span>
                                                            <span>Payroll Processed</span>
                                                        </a>
                                                    </li>
                                               </ul>
                                            </div>
                                    </div>
                                    <li>
                                        <a href="#" class = "nav-link px-3">
                                            <span class="me-2"><i class="fas fa-house-leave"></i></span>
                                            <span>Leave of Absence</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class = "nav-link px-3">
                                            <span class="me-2"><i class="bi bi-list-task"></i></span>
                                            <span>Performance Review</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class = "nav-link px-3">
                                            <span class="me-2"><i class="bi bi-cash-coin"></i></span>
                                            <span>Intranet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class = "nav-link px-3">
                                            <span class="me-2"><i class="bi bi-building-fill-gear"></i></span>
                                            <span>Find Tax Forms</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </nav>
                    </div>
                <!--</div>-->
                </div>


            <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-6">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Payroll</a></li>
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- Chart.js is a third party plugin that is used to generate the charts in this template. The charts below have been customized - for further customization options, please visit the official -->
                                <!-- <a target="_blank" href="https://www.chartjs.org/docs/latest/">Chart.js documentation</a> -->
                               <strong> These charts shows the whole year split into months (x) and the days of incapacity for work in total (y) of all employees 
                                 ending with this actual month</strong>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart
                                    </div>
                                    <div class="card-body"> <canvas id="barChart" style="width:100%;max-width:600px"></canvas>
                                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                        <script>
                                            var xValues = ["February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "January"];
                                            var yValues = [14,8,9,14,3,6,5,15,13,7,6,3];
                                            var barColors = ["red", "green","blue","orange","brown","black","yellow","wheat","skyblue","orange","coffee","pink"];

                                                new Chart("myChart", {
                                                type: "bar",
                                                data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                    backgroundColor: barColors,
                                                    data: yValues
                                                    }]
                                                    },
                                                    options: {
                                                        legend: {display: false},
                                                        title: {
                                                        display: true,
                                                        text: "Days of incapacity for work"
                                                        }
                                                    }
                                                    });
                                        </script>
                                
                                    </div>
                                    <div class="card-footer small text-muted">this chart shows the number (y) of short term, medium short,
                                         medium long and long term (x) in total within the last 365 daysUpdated yesterday at 11:59 PM</div>
                                    </div>
                            </div>
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Warning!!</h4>
                                <p class="mb-0">Van Dijk(ID H0079)was ill for three weeks in total within 365 days. Please invite the employee to answer some questions in the intranet and contact his manager.
                                    After six weeks it's time for a occupational reintegration.
                                    <button type="button" class="btn btn-info btn-sm">Remind me later</button><button type="button" class="btn btn-danger btn-sm">write a message to the manager and contact employee to answer question</button>
                                </p>
                            </div>
                        <!-- <div class="row"> -->
                            <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart 
                                    </div>
                                    <!-- <div class="card-body"><canvas id="areaChart" width="100%" height="30"></canvas> -->
                                     <canvas id="areaChart" style="width:100%; max-width:700px"></canvas> 
                                        <script>
                                            var xValues = ["February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "January"];
                                            var yValues = [14,8,9,14,3,6,5,15,13,7,6,3];
                                            
                                                new Chart("areaChart", {
                                                type: "line",
                                                data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                    fill: false,
                                                    lineTension: 0,
                                                    backgroundColor: "rgba(0,0,255,1.0)",
                                                    borderColor: "rgba(0,0,255,0.1)",
                                                    data: yValues
                                                    }]
                                                },
                                                options: {
                                                    legend: {display: false},
                                                    scales: {
                                                    yAxes: [{ticks: {min: 6, max:16}}],
                                                    }
                                                }
                                                });
                                         </script>
                                </div>
                                    <div class="card-footer small text-muted">this chart shows the whole year split into months (x) and
                                    the days of incapacity for work in total (y) of all employees 
                                    ending with this actual monthUpdated yesterday at 11:59 PM</div>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header wrapper">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pie Chart 
                                    </div>
                                    <div class="pie-wrap">
                                        <div class="red entry">
                                            <p>12%</p>
                                            <strong class="entry-value">Short Term</strong>
                                        </div>
                                        <div class="sky-blue entry">
                                            <p>7%</p>
                                            <strong class="entry-value">Medium Short</strong>
                                        </div>
                                        <div class="green entry">
                                            <p> 1%</p>
                                            <strong class="entry-value">Medium Long</strong>
                                        </div>
                                        <div class="wheat entry">
                                            <p>0%</p>
                                            <strong class="entry-value">Long Term</strong>
                                        </div>
                                    </div>
                                    <!--pie chart keys -->
                                    <div>
                                        <input type="radio" id="Rentry" name="values" class="red-key"/>
                                        <label for="red" class="red-label">Short Term</label>

                                        <input type="radio" name="values" id="blue" class="blue-key"/>
                                        <label for="blue" class="blue-label"> medium short</label>

                                        <input type="radio" name="values" id="gentry" class="green-key"/>
                                        <label for="greens" class="green-label"> medium long</label>

                                        <input type="radio" name="values" id="wheat" class="wheat-key"/>
                                        <label for="wheat" class="wheat-label"> long term</label>
                                    </div>
                                     <div class="card-body"><canvas width="200%" height="10"></canvas></div> 
                                     <div class="card-footer small text-muted">Updated</div>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </main>


                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                       <!-- <div class="card mb-4">
                            <div class="card-body">
                                <!-- DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the -->
                                <!-- <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> -->
                                
                            <!-- </div> -->
                        <!-- </div>--> 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Fehlzeiten DataTable 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID Number</th>
                                            <th>Lastname and FirstName/Age </th>
                                            <th>Department</th>
                                            <th>Days of incapacity for work in total</th>
                                            <th>Short term(1-3 days),medium short(4-14d),medium long(15-27d),long term(28+days)</th>
                                            <th>Number of touchpoints with employee</th>
                                            <th>Employees has been contacted</th>
                                            <th>Reintegration Process started</th>
                                            <th>Manager has been contacted</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Number</th>
                                            <th>Lastname and FirstName/Age </th>
                                            <th>department</th>
                                            <th>Days of incapacity in total</th>
                                            <th>Short term(1-3 days),medium short(4-14d),medium long(15-27d),long term(28+days)</th>
                                            <th>Number of touchpoints with employee</th>
                                            <th>Employees has been contacted</th>
                                            <th>Reintegration Process started</th>
                                            <th>Manager has been contacted</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>H0012</td>
                                            <td>Albrecht Hannah 31</td>
                                            <td>Human Resources</td>
                                            <td>12</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-success  progress-bar-stripped"
                                                        style="width: 10%">3%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">3</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>M0024</td>
                                            <td>Bauer Jana 28</td>
                                            <td>Manufacturing</td>
                                            <td>20</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-success  progress-bar-stripped"
                                                        style="width: 10%">3%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">2</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>S0031</td>
                                            <td>Davis William 19</td>
                                            <td>Sales</td>
                                            <td>7</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-success  progress-bar-stripped"
                                                        style="width: 8%">2%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">0</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>S0048</td>
                                            <td>Fischer Michael 49</td>
                                            <td>Sales</td>
                                            <td>32</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-success  progress-bar-stripped"
                                                        style="width: 10%">3%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">5</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select></td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A0051</td>
                                            <td>Gruber Lukas 61</td>
                                            <td>Accounting</td>
                                            <td>12</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress bg-danger  progress-bar-stripped"
                                                        style="width: 5%">1%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">0</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select></td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>M0064</td>
                                            <td>Loibl Peter 38</td>
                                            <td>Manufacturing</td>
                                            <td>12</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-success  progress-bar-stripped"
                                                        style="width: 10%">10%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">0</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                    <option selected value="yes"></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>H0079</td>
                                            <td>Van Dijk Hannes 23</td>
                                            <td>Human Resources</td>
                                            <td>12</td>
                                            <td><div class="progress" style="max-width: 60%">
                                                    <div class="progress-bar bg-warning  progress-bar-stripped"
                                                        style="width: 15%">6%
                                                    </div>
                                                </div>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="">0</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select" aria-label="Default select example">
                                                    <option selected value="yes"></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                            <td><select class="form-select"  aria-label="Default select example">
                                                <option selected value="yes"></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="asset/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="asset/demo/chart-area-demo.js"></script>
        <script src="asset/demo/chart-bar-demo.js"></script>
        <script src="asset/demo/chart-pie-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="asset/js/datatables-simple-demo.js"></script> 
</body>
                        
            
                
            </div>
        </div>
    </div>
    <!--
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="asset/demo/chart-area-demo.js"></script>
        <script src="asset/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
        <!-- <script src="../asset/script.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.36.3/apexcharts.min.js"></script>
</body>

<!--
https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js
https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js-->
<!--<div class="row text-center">
                    <div class="col-md-12">
                            <div class="col-sm-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                         Payroll Chart 2023 
                                    </div>
                                    <div class="card-body col-sm-4"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-md-4 ms-auto">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        salary chart
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                    
                </div>-->
                <!--<script>
                                new chart(document.getElementById('pie-chart'),{
                                    type: 'pie',
                                    data: {
                                        labels: ['Short Term','Medium Short', 'Medium Long','Long Term'],
                                        datasets: [{
                                            backgroundColor: [#EC0A0A, #0ADEEC, #0AEC38, #E5CAB3],
                                            data : [418, 263, 434, 586, 332]
                                        }]
                                    },
                                    option:{
                                        title:{display:true,
                                        text: 'Pie Chart'},
                                        responsive:true
                                    }
                                });
                            </script>-->