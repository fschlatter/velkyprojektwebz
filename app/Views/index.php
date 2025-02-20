<?= $this->extend("layout/layout");?>
<?= $this->section('content');?>
<div class="container">
    <h1>Typy komponent</h1>
    <div class="row justify-content-center">
        <?php foreach($typkomponent as $typ):?>
            <div class="card col-12 col-md-5 col-lg-3 m-1">
                <h2><?=anchor(base_url("komponent/typkomponent/".$typ['idKomponent']), $typ['typKomponent'])?></h2>
            </div>
            <?php endforeach?>
    </div>
</div>
<div class="container">
    <h1>Výrobci</h1>
    <div class="row justify-content-center">
        <?php foreach($vyrobce as $vyr):?>
            <div class="card col-12 col-md-5 col-lg-3 m-1">
                <h2><?=anchor(base_url("komponent/vyrobce/".$vyr['idVyrobce']), $vyr['vyrobce'])?></h2>
            </div>
            <?php endforeach?>

</div>
<?= $this->endSection();?>