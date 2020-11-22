<?php /** @var \App\Models\Frayer $data */?>
<div class="container">
    <form method="post">
        <?php if (!empty($data['model'])) { ?>
            <input type="hidden" value="<?= $data['model']->getId() ?>" name="id">
        <?php } ?>
        <div>
            <textarea class="form-control" name="nazov"><?= (!empty($data['model']) ? $data['model']->getNazov() : "")  ?></textarea>
            <?php if(isset($data['err']['nazov'])) {
                foreach ($data['err']['nazov'] as $err) {
                    ?>
                    <div><?= $err ?></div>
                <?php }} ?>
        </div>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card">
                <textarea class="card-body" name="definicia"><?= (!empty($data['model']) ? $data['model']->getDefinicia() : "")  ?></textarea>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <textarea class="card-body" name="vlastnosti"><?= (!empty($data['model']) ? $data['model']->Vlastnosti() : "")  ?></textarea>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <textarea class="card-body" name="priklady"><?= (!empty($data['model']) ? $data['model']->getPriklady() : "")  ?></textarea>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <textarea class="card-body" name="nonpriklady"><?= (!empty($data['model']) ? $data['model']->getNonpriklady() : "")  ?></textarea>
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Odoslat</button>

    </form>
</div>