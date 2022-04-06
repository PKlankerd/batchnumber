
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- fontgoogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Batch Num</title>
</head>

<body style="background-color:#c9e0f1; overflow:auto; ">

    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-hand'></i>
            <span class="logo_name">Ansell Thailand</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="homeqc.php">
                    <i class='bx bx-home-heart'></i>
                    <span class="link_name">HOME</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="homeqc.php">HOME</a></li>
                </ul>
            </li>
            <!-- <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-report'></i>
                        <span class="link_name">Report</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">**Report**</a></li>
                    <li><a href="reportdipL.php">Dipping Lot L</a></li>
                    <li><a href="reportdipR.php">Dipping Lot R</a></li>
                    <li><a href="productionlot.php">Production-Lot</a></li>
                    <li><a href="qcbincard.php">QC Bincard</a></li>
                    <li><a href="reportafterprocess.php">Chlorinator</a></li>
                    <li><a href="qi.php">Inspection</a></li>
                    <li><a href="Statisticaltest1.php">Statistical Test-1</a></li>
                    <li><a href="Rework.php">Rework</a></li>
                    <li><a href="Statisticalafter.php">Statistical After</a></li>
                    <li><a href="bonding.php">Bonding</a></li>
                    <li><a href="documentproduct.php">Product</a></li>
                    <li><a href="documentmembers.php">Members</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">constant</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">**constant**</a></li>
                    <li><a href="productadd.php">Product</a></li>
                    <li><a href="membersadd.php">Members</a></li>
                    <li><a href="glovecolor.php">Glovecolor</a></li>
                    <li><a href="shell.php">Shell</a></li>
                    <li><a href="size.php">Size</a></li>
                    <li><a href="status.php">Status</a></li>
                    

                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-edit-alt'></i>
                        <span class="link_name">Edit</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                <li><a class="link_name" href="#">**Edit**</a></li>
                    <li><a href="editqcbincard.php">QC Bincard</a></li>
                    <li><a href="editqi.php">Qi</a></li>
                    <li><a href="editStatisticaltest1.php">Statistical Test1</a></li>
                    <li><a href="editRework.php">Rework</a></li>               
                    <li><a href="editStatisticalafter.php">Statistical After</a></li>
                    <li><a href="editbonding.php">Bonding</a></li>
                    
                </ul>
            </li> -->

            <li>
                <div class="profile-details">
                    <!-- <div class="profile-content">
                        <img src="pic/users.png" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"> <span><?php echo $_SESSION['firstname'];?>
                                <?php echo $_SESSION['lastname'];?></span></div>
                        <div class="job"> <span><?php echo $_SESSION['department'];?></span></div>
                    </div>
                    <a href="../logout.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a> -->
                </div>
            </li>
        </ul>
    </div>

    <!-- sidebar -->

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <!-- <span class="text"><span>Welcome To </span><span><?php echo $_SESSION['firstname'];?></span> -->
            <!-- </span> -->
        </div>

        <div class="container-fluid" id="crudApp">
            <div class=" home_content ">
                <div class="col-12" align="center">
                    <div class="col-md-4">                   
                    </div>
                    <hr>
                    <div class="col-lg-11 ">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true"  style="font-size: 3rem; padding: 0px 20px;">L</button>

                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false"  style="font-size: 3rem; padding: 0px 20px;">R</button>
                            </div>
                        </nav>
                       
                        <div class="tab-content " id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="col-lg-12 shadow p-3 bg-light">
                               
                                    <div class="table-responsive-lg ">
                                        <h1 align="left"  style="background-color: #48C9B0;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L</h1>
                                        <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                <th>#</th>
                                <th>Dipping Lot</th>
                                <th>Batch1</th>
                                <th>AMT-1</th>
                                <th>Batch2</th>
                                <th>AMT-2</th>
                                <th>Batch3</th>
                                <th>AMT-3</th>
                                <th>Batch4</th>
                                <th>AMT-4</th>
                                <th>Batch5</th>
                                <th>AMT-5</th>
                                <th>Batch6</th>
                                <th>AMT-6</th>
                                <th>TotalGlove</th>
                                <th>Action</th>
                            </thead>
                 
                            <tbody>          
                            <tr v-for="(row, index) in allData">
                                <td><input class="form-check-input " type="checkbox" id="flexCheckDefault" @click="selectDipL(index)" :disabled="validateDipL(index)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " :value="row.DippingLot_L" id="fname" name="dippinglotl"
                                autocomplete="off" disabled></td>
                                <td><input type="text" class="form-control form-control-sm " v-model="row.Batch1" id="fname" name="batch1l" :disabled="lockIt(row.DippingLot_L)"></td>
                                <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt1" @change="calTotalR(index)" name="amt1l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " id="fname" v-model="row.Batch2" name="batch2l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt2" @change="calTotalR(index)" name="amt2l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " id="fname" v-model="row.Batch3" name="batch3l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm expenses" id="fname" v-model="row.amt3" @change="calTotalR(index)" name="amt3l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " id="fname" v-model="row.Batch4" name="batch4l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm expenses" id="fname" v-model="row.amt4" @change="calTotalR(index)" name="amt4l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " id="fname" v-model="row.Batch5" name="batch5l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm expenses" id="fname" v-model="row.amt5" @change="calTotalR(index)" name="amt5l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm " id="fname" v-model="row.Batch6" name="batch6l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control-sm expenses" id="fname" v-model="row.amt6" @change="calTotalR(index)" name="amt6l" :disabled="lockIt(row.DippingLot_L)">
                                </td>
                                <td><input type="text" class="form-control form-control expenses_sum" name="totall" v-model="row.TotalPcs" :disabled="lockIt(row.DippingLot_L)"></td>
                                <td>
                                    <!-- <button type="submit" name="sumbatl" class="btn btn-primary btn-sm m-1">Save</button> -->
                                    <button type="button" name="delete" class="btn btn-danger btn-sm delete" data-bs-toggle="modal" @click="deleteData(row.DippingLot_L)"
                                        data-bs-target="#myModal">Delete</button>
                                </td>
                            </tr>
                             <div class="col-lg-11">
                              
                                <button class="btn btn-success btn-lg m-4 " name="productgenL" type="submit" style="float: right;"
                                    data-bs-target="#staticBackdrop" @click="sendDataDipL()" >Gen
                                    Production Lot L</button>
                                                            
                            </div>
                            </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="col-lg-12 shadow p-3 bg-light ">
                                    <div class="table-responsive-lg">
                                        <h1 align="left" style="background-color: #5DADE2;">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R</h1>
                                        <table class="table table-bordered table-striped table-sm">
                                            <thead>
                                                <th>#</th>
                                                <th>Dipping Lot</th>
                                                <th>Batch1</th>
                                                <th>AMT-1</th>
                                                <th>Batch2</th>
                                                <th>AMT-2</th>
                                                <th>Batch3</th>
                                                <th>AMT-3</th>
                                                <th>Batch4</th>
                                                <th>AMT-4</th>
                                                <th>Batch5</th>
                                                <th>AMT-5</th>
                                                <th>Batch6</th>
                                                <th>AMT-6</th>
                                                <th>TotalGlove</th>
                                                <th>Action</th>
                                            </thead>
                                         
                                            <tbody>
                                <tr v-for="(row, index) in allDataR">
                                    <td><input class="form-check-input " type="checkbox" id="flexCheckDefault" @click="selectDipR(index)" :disabled="validateDipR(index)"></td>
                                    <td><input type="text" class="form-control form-control-sm " :value="row.DippingLot_R" id="fname" name="dippinglotr" autocomplete="off" disabled></td>
                                    <td><input type="text" class="form-control form-control-sm " v-model="row.Batch1" id="fname" name="batch1r" autocomplete="off" :disabled="lockItR(row.DippingLot_R)"></td>
                                    <td><input type="text" class="form-control form-control-sm expenses " v-model="row.amt1" @change="calTotal(index)" id="fname" name="amt1r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm  " v-model="row.Batch2" id="fname" name="batch2r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt2" @change="calTotal(index)" id="fname" name="amt2r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm " v-model="row.Batch3" id="fname" name="batch3r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt3"  @change="calTotal(index)" id="fname" name="amt3r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm " v-model="row.Batch4" id="fname" name="batch4r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt4"  @change="calTotal(index)" id="fname" name="amt4r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm " v-model="row.Batch5" id="fname" name="batch5r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt5"  @change="calTotal(index)" id="fname" name="amt5r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm " v-model="row.Batch6" id="fname" name="batch6r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses" v-model="row.amt6"  @change="calTotal(index)" id="fname" name="amt6r" :disabled="lockItR(row.DippingLot_R)">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm expenses_sum" v-model="row.TotalPcs" id="fname" name="totalr" :disabled="lockItR(row.DippingLot_R)"></td>
                                        <td>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm
                                            delete" data-bs-toggle="modal" @click="deleteData(row.DippingLot_R)"
                                            data-bs-target="#myModal">Delete</button>
                                           
                                        </td>
                                </tr>
                                <div class="col-lg-11">
                                   
                                    <button class="btn btn-success btn-lg m-4 " name="productgen" type="submit" style="float: right;"
                                    data-bs-target="#staticBackdrop" @click="sendDataDipR()" >Gen
                                    Production Lot R</button>
                          
                                </div>
                                    </div>
                            </tbody>
                                </table>
                                <br>
                                </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
    </section>

    <script src="js/addgendiplot.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


</body>
</html>