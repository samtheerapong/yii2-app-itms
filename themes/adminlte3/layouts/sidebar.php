<?php

use yii\helpers\Html; ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="https://www.northernfoodcomplex.com/wp-content/uploads/2018/10/logo.png" alt="Logo" class="brand-image elevation-4" style="opacity: .8;">
        <span class="brand-text font-weight-light">&nbsp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="https://www.northernfoodcomplex.com/wp-content/uploads/2018/10/logo.png" alt="AdminLTE Logo" class="brand-image elevation-2" style="opacity: .8; width:50px;"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <p>

                    </p>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
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
            <?php echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [

                    [
                        'label' => Yii::t('app', 'IT Jobs'),
                        'icon' => 'fas fa-home',
                        //'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            [
                                'label' => Yii::t('app', 'Jobs'),
                                'url' => ['/jobs/jobs/index'],
                                'icon' => 'fas fa-flag text-danger',
                            ],
                            [
                                'label' => Yii::t('app', 'Operations'),
                                'url' => ['/jobs/operations/index'],
                                'icon' => 'fas fa-laptop text-danger',
                            ],
                            [
                                'label' => Yii::t('app', 'Config'),
                                'icon' => 'fas fa-cogs',
                                //'badge' => '<span class="right badge badge-info">2</span>',
                                'items' => [
                                    [
                                        'label' => Yii::t('app', 'Job Status'),
                                        'url' => ['/jobs/job-status/index'],
                                        'icon' => 'fas fa-angle-double-right',
                                    ],
                                    [
                                        'label' => Yii::t('app', 'Job Type'),
                                        'url' => ['/jobs/job-type/index'],
                                        'icon' => 'fas fa-angle-double-right',
                                    ],
                                    [
                                        'label' => Yii::t('app', 'Job Urgency'),
                                        'url' => ['/jobs/job-urgency/index'],
                                        'icon' => 'fas fa-angle-double-right',
                                    ],

                                ],
                            ],

                        ],
                    ],
                    [
                        'label' => Yii::t('app', 'IT Asset'),
                        'icon' => 'fas fa-home',
                        //'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            [
                                'label' => Yii::t('app', 'System User'),
                                'url' => ['/itms/system-user/index'],
                                'icon' => 'fas fa-star text-danger',
                            ],
                            [
                                'label' => Yii::t('app', 'computers'),
                                'url' => ['/itms/computers/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],
                            [
                                'label' => Yii::t('app', 'monitors'),
                                'url' => ['/itms/monitors/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],
                            [
                                'label' => Yii::t('app', 'office'),
                                'url' => ['/itms/office/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],
                            [
                                'label' => Yii::t('app', 'printers'),
                                'url' => ['/itms/printers/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],
                            [
                                'label' => Yii::t('app', 'ups'),
                                'url' => ['/itms/ups/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],
                            [
                                'label' => Yii::t('app', 'windows'),
                                'url' => ['/itms/windows/index'],
                                'icon' => 'fas fa-angle-double-right',
                            ],

                        ],
                    ],

                    [
                        'label' => 'Gii',
                        'icon' => 'file-code',
                        'url' => ['/gii'],
                        'target' => '_blank',
                    ],

                    //         [
                    //             'label' => 'Starter Pages',
                    //             'icon' => 'tachometer-alt',
                    //             'badge' => '<span class="right badge badge-info">2</span>',
                    //             'items' => [
                    //                 ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    //                 ['label' => 'Inactive Page', 'iconStyle' => 'far'],
                    //             ]
                    //         ],

                    //         ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    //         ['label' => 'Yii2 PROVIDED', 'header' => true],
                    //         ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    //         ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    //         ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    //         ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    //         ['label' => 'Level1'],
                    //         [
                    //             'label' => 'Level1',
                    //             'items' => [
                    //                 ['label' => 'Level2', 'iconStyle' => 'far'],
                    //                 [
                    //                     'label' => 'Level2',
                    //                     'iconStyle' => 'far',
                    //                     'items' => [
                    //                         ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                         ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                         ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                    //                     ]
                    //                 ],
                    //                 ['label' => 'Level2', 'iconStyle' => 'far']
                    //             ]
                    //         ],
                    //         ['label' => 'Level1'],
                    //         ['label' => 'LABELS', 'header' => true],
                    //         ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    //         ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    //         ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                    //
                ],
            ]); ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>