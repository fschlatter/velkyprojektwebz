<?= $this->extend("layout/layout");?>
<?= $this->section("content") ?>
<div class="container">
    <h1>Typy komponent</h1>
    <div class="row justify-content-center">
        <?php foreach($komponenty as $komponent):?>
            <div class="card col-12 col-md-5 col-lg-3 m-1">
                <h2><?= anchor(base_url('komponenta/'.$komponent['id']),$komponent['nazev']) ?></h2>
            </div>
            <?php endforeach?>
    </div>
</div>
<?= $this->endSection() ?>