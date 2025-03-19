<?php $this->extend("layout/layout");?>
<?php $this->section('content');?>
<h1>Taby:</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php $i = 0; foreach($typkomponent as $index => $typ): ?>
        <li class="nav-item" role="presentation">
            <a class="nav-link <?= $index === 0 ? 'active' : '' ?>" id="tab-<?= $index ?>" data-bs-toggle="tab" href="#content-<?= $index ?>" role="tab" aria-controls="content-<?= $index ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                <?= $typ['typKomponent'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<div class="tab-content" id="myTabContent">
    <?php foreach($typkomponent as $index => $typ): ?>
        <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" id="content-<?= $index ?>" role="tabpanel" aria-labelledby="tab-<?= $index ?>">
            <div class="row justify-content-center">
            <?php foreach($komponenty as $komponent): ?>
                <?php if($komponent['typKomponent'] == $typ['typKomponent']): ?>
                    <div class="card col-12 col-md-5 col-lg-3 m-1">
                        <h2><?= anchor(base_url('komponenta/'.$komponent['id']), $komponent['nazev']) ?></h2>
                        <span><img class="img card-img" src="<?= base_url('resources/komponenty/'.$komponent['pic']) ?>" alt="" srcset=""></span>
                        <p>Typ komponenty: <span><?= $komponent['typKomponent'] ?></span></p>
                        <p>Výrobce: <span><?= $komponent['vyrobce']; $i++; ?></span></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php $this->endSection();?>