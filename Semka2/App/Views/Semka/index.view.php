<div class="container">
<?php /** @var App\Models\Frayer[] $data */
foreach ($data as $frayer) { ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="titleOfModel">
                <?= $frayer->getNazov() ?>
            </h1>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="partOfModel">
                        <div class="card-header">Definicia</div>
                        <div class="card-body">
                            <h1 class="display-4">
                                <?= $frayer->getDefinicia() ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="partOfModel">
                        <div class="card-header">Vlastnosti</div>
                        <div class="card-body">
                            <h1 class="display-4">
                                <?= $frayer->getPriklady() ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="partOfModel">
                        <div class="card-header">Priklady</div>
                        <div class="card-body">
                            <h1 class="display-4">
                                <?= $frayer->getPriklady() ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="partOfModel">
                        <div class="card-header">Non-Priklady</div>
                        <div class="card-body">
                            <h1 class="display-4">
                                <?= $frayer->getNonpriklady() ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1>
            <a href="?c=Semka&a=delete&id=<?= $frayer->getId()?>">Zmazat</a> &nbsp;&nbsp;&nbsp;
            <a href="?c=Semka&a=edit&id=<?= $frayer->getId()?>">Upravit</a>
        </h1>
    </div>

<?php } ?>
</div>
