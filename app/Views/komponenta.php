<?= $this->extend("layout/layout");?>
<?= $this->section("content") ?>
<div class="container">
    <h1><?=$komponenty['nazev']?></h1>
    <p>Typ komponenty: <span><?=$komponenty['typKomponent']?></span></p>
    <p>Výrobce: <span><?=$komponenty['vyrobce']?></span></p>
    <span><img src="<?= base_url("resources/komponenty/".$komponenty['pic']) ?>" alt="" srcset=""></span>
    <p><a href="<?=$komponenty['odkaz']?>" target="_blank" rel="noopener noreferrer">Odkaz na Alzu</a></p>
</div>
<?= $this->endSection() ?>