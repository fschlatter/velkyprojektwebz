<?php $this->extend("layout/layout");?>
<?php $this->section('content');?>
<h1>Taby:</h1>
<ul class="nav nav-tabs">
    <?php foreach($typkomponent as $typ):?>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url("komponent/".$typ['url'])?>"><?=$typ['typKomponent']?></a>
        </li>
    <?php endforeach?>
</ul>
<?php $this->endSection();?>