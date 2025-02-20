<?= $this->extend("layout/layout");?>
<?= $this->section("content") ?>
<div class="container">
    <h1>Komponenty</h1>
    <div class="row justify-content-center">
        <?php foreach($komponenty as $komponent):?>
            <div class="card col-12 col-md-5 col-lg-3 m-1">
                <h2><?= anchor(base_url('komponenta/'.$komponent['id']),$komponent['nazev']) ?></h2>
                <span><img class="img card-img " src="<?= base_url('resources/komponenty/'.$komponent['pic']) ?>" alt="" srcset=""></span>
                <p>Typ komponenty: <span><?= $komponent['typKomponent'] ?></span></p>
                <p>Výrobce: <span><?= $komponent['vyrobce'] ?></span></p>
            </div>
            <?php endforeach?>
    </div>
    <?= $pager->links() ?>
</div>
<?= $this->endSection() ?>