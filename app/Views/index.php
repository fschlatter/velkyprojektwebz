<?= $this->extend("layout/layout");?>
<?= $this->section('content');?>
<div class="content">
    <h1>Typy komponent</h1>
    <div class="row justify-content-center">
        <?php foreach($typkomponent as $typ):?>
            <div class="card col-12 col-md-5 col-lg-3 m-1">
                <h2><?=anchor(base_url("komponent/".$typ['typKomponent']), $typ['typKomponent'])?></h2>
                <p><?=$typ['idKomponent']?></p>
                <a href="<?=base_url($typ['url'])?>"></a>
            </div>
            <?php endforeach?>
    </div>
</div>
<div class="content">
    <h1>Výrobci</h1>
    <?=var_dump($typkomponent)?>

</div>
<?= $this->endSection();?>