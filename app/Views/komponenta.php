<?= $this->extend("layout/layout");?>
<?= $this->section("content") ?>
<div class="container">
    <h1><a class="text-body" href="<?= base_url("/")?>"><span class="fa  fa-home"></span></a> > 
    <a class="text-muted" href="<?=base_url("/komponent//".$komponenty["url"])?>"><?= $komponenty['typKomponent'] ?></a> > 
    <?=$komponenty['nazev']?> </h1>
    <p>Typ komponenty: <span><?=$komponenty['typKomponent']?></span></p>
    <p>Výrobce: <span><?=$komponenty['vyrobce']?></span></p>
    <span><img src="<?= base_url("resources/komponenty/".$komponenty['pic']) ?>" alt="" srcset=""></span>
    <p><a href="<?=$komponenty['odkaz']?>" target="_blank" rel="noopener noreferrer">Odkaz na Alzu</a></p>
</div>
<?= $this->endSection() ?>