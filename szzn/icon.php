<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/img.png" alt=""><?php include 'auth.php' ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="profile.php"> 个人信息</a></li>
                        <li>
                            <a href="javascript:;">
                                <span>设置</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">帮助</a></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                    </ul>
                </li>
        </nav>
    </div>
</div>