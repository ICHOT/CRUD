<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">JAMBU FIRE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"><?php echo $menu; ?> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mutasi
        </a>
        <div class="dropdown-menu text-white bg-dark " aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white bg-dark " href='<?php echo base_url("Siswa"); ?>'>SISWA</a>
          <a class="dropdown-item text-white bg-dark " href='<?php echo base_url("Guru"); ?>'>GURU</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-white bg-dark " href='<?php echo base_url("Pelajaran"); ?>'>PELAJARAN</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?php echo base_url('Guru/tambah'); ?>' tabindex="-1" aria-disabled="true">TAMBAH DATA</a>
      </li>
    </ul>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item">
        <a href='<?php echo base_url('login/logout'); ?>' class="btn btn-danger btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-exclamation-triangle"></i>
          </span>
          <span class="text">LogOut</span>
        </a>
      </li>
    </ul>
  </div>
</nav>