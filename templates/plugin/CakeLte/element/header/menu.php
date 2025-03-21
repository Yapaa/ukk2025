<li class="nav-item d-none d-sm-inline-block">
  <?= $this->Html->link(__('Home'), '/', ['class' => 'nav-link']) ?>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <?= $this->Html->link(__('Pengguna'), '/users', ['class' => 'nav-link']) ?>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <?= $this->Html->link(__('Pengaduan'), '/pengaduan', ['class' => 'nav-link']) ?>
</li>
<li class="nav-item d-none d-sm-inline-block">
  <?php if ($this->Identity->isLoggedIn()) { 
    echo $this->Html->link(__('Logout'), '/petugas/logout', ['class' => 'nav-link']);
  }else{
    echo $this->Html->link(__('Login'), '/petugas/login', ['class' => 'nav-link']);
  } ?>
  
</li>
