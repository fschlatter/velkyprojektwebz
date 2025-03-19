<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <!-- Links -->
    <ul class="navbar-nav">
      <?php foreach($navbar as $nav):?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url($nav["url"])?>"><?= $nav['nazev'] ?></a>
      </li>
      <?php endforeach?>
    </ul>
  </div>
</nav>