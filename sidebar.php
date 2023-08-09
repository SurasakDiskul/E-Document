<!-- sidebar menu area start -->
<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="./T-11.png" alt="logo"><p class="text-white"><?php echo $_SESSION['status2'] ?></p></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav> 
                        <div class="user-profile">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle"><?php echo $_SESSION['membername'] ?></h4>
                        </div>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="./index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="./category.php" aria-expanded="true"><i class="ti-layout-tab"></i><span>
                                        Document Types
                                    </span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-file"></i><span>Manage Document</span></a>
                                <ul class="collapse">
                                    <li><a href="adddoc.php">Add Document</a></li>
                                    <li><a href="approval.php"> Documents Pending Approval</a></li>
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