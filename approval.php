<?php
session_start();
include('./php/connect.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Document Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./T-11.png">
    <?php include('./css.php'); ?>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
<!-- sidebar menu area start -->
<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="./T-11.png" alt="logo"><p class="text-white">SuperAdmin</p></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav> 
                        <div class="user-profile">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle">SuperAdmin</h4>
                        </div>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="./index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="./category.php" aria-expanded="true"><i class="ti-layout-tab"></i><span>
                                        Document Types
                                    </span></a>
                            </li>
                            <li class="active" >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-file"></i><span>Manage Document</span></a>
                                <ul class="collapse">
                                    <li ><a href="adddoc.php">Add Document</a></li>
                                    <li class="active"><a href="approval.php"> Documents Pending Approval</a></li>
                                    <li><a href="doc.php">Approved Documents</a></li>
                                    <li><a href="rejdoc.php">Disapproved Document</a></li>
                                    <li><a href="cndoc.php">Canceled Document</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" aria-expanded="true"><i class="ti-new-window"></i><span>
                                        Logout
                                    </span></a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
        <?php include ('./header.php') ;?>
         <!-- page title area start -->
         <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Manage Document</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>DEPT.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle">.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">          
                <!-- order list area start -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Document Pending Approval</h4>
                    <div class="container1">
                    <div class="table-responsive">
                        <?php 
                            $aa = $_SESSION['membername'];
                            $sql = "SELECT * FROM `tbapproval` WHERE approver = '$aa'";
                            $result = mysqli_query($conn,$sql);
                        ?>
                      <table id="myTABLE" class="table table-responsive" width="100%">
                      <thead class="thead-light">
                          <tr>
                          <th width="5%">DocID</th>
                            <th width="10%"> Document </th>
                            <th width="20%"> Type </th>
                            <th width="20%"> DocFile </th>
                            <th width="20%"> Send To </th>
                            <th width="10%"> Dept </th>
                            <th width="10%"> Approver </th>
                            <th width="5%"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                          <tr>
                          <td><?php echo $row['doc_id'] ?></td>
                          <td><?php echo $row['doc_name'] ?></td>
                          <td><?php echo $row['cate_name'] ?></td>
                          <td><?php echo $row['doc_file'] ?></td>
                          <td><?php echo $row['member_name'] ?></td>
                          <td><?php echo $row['de_name'] ?></td>
                          <td><?php echo $row['approver']; ?></td>
                          <td>
                           <a class="btn btn-primary btn-sm text-dark" href="approvedoc.php?doc_id=<?php echo $row['doc_id'] ?>">View</a>
                          </td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                      
                    </div>
                          </div>
                    </div>
                </div>
                <!-- order list area end -->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2023. All right reserved. Create by Team IT & ERP - CJL.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

</body>
<?php include('./js.php'); ?>

</html>
