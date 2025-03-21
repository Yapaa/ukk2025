<?php
$menu = [
    'mainHeader' => [
        'label' => __('Master Data'),
        'type' => $this->MenuLte::ITEM_TYPE_HEADER, // or 'header'
    ],
    'mPengguna'=>[
        'label'=> __('Pengguna'),
        'icon' => 'fas fa-users',
        'uri' => ['controller' => 'Petugas', 'action' => 'index'],
    ],
    'mAduan'=>[
        'label'=> __('Pengaduan'),
        'icon' => 'fas fa-book',
        'uri' => ['controller' => 'Pengaduan', 'action' => 'index'],
    ],
    'mTanggap'=>[
        'label'=> __('Tanggapan'),
        'icon' => 'fas fa-book',
        'uri' => ['controller' => 'Tanggapan', 'action' => 'index'],
    ],
    'mLogout'=>[
        'label'=> __('Logout'),
        'icon' => 'fas fa-sign-out-alt text-danger',
        'uri' => ['controller' => 'Petugas', 'action' => 'logout'],
    ],
];


echo $this->MenuLte->render($menu);


/*
- To activate an item, you can pass the `active` variable, or use method `activeItem` from the template
    Example: 
        $this->MenuLte->activeItem('startPages.activePage');

- It is also possible to create the menu using the html code
    <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Active Page</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
*/
