<div class="container">
    <?php /** @var App\Models\Zamestnanec[] $data */
    foreach ($data as $zamestnanec) { ?>

        <div class="container">
            <div class="card mb-3" >
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= $zamestnanec->getPhoto() ?>" class="obrProfilovka">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title"><?= $zamestnanec->getMeno() ?></h1>
                            <p class="card-text"><?= $zamestnanec->getPopis() ?></p>
                            <p class="card-text"><small class="text-muted">Vek: <?= $zamestnanec->getVek() ?></small></p>
                            <a href="?c=Zamestnanci&a=delete&id=<?= $zamestnanec->getId()?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zmazat</a>
                            <a href="?c=Zamestnanci&a=edit&id=<?= $zamestnanec->getId()?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Upravit</a>

                        </div>
                        </div>

                </div>
            </div>
        </div>


    <?php } ?>
</div>
