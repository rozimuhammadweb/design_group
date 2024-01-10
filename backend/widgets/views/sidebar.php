<?php

use yii\helpers\Url;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <?php
                if (!Yii::$app->user->isGuest) {
                    $username = Yii::$app->user->identity->username;
                    echo "<a href='#' class='d-block'>$username</a>";
                } else {
                    echo '<p>Hello, Guest</p>';
                    echo '<a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>';
                }
                ?>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= Url::to(['/about']) ?>" class="nav-link">
                        <i class="fa fa-info " aria-hidden="true"></i>
                        <p class="pl-2">
                            Biz haqimizda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/settings']) ?>" class="nav-link">
                        <i class="fa fa-cog " aria-hidden="true"></i>
                        <p class="pl-1">
                            Sozlamalar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>