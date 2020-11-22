<?php /** @var \App\Models\Zamestnanec $data */?>
<div class="container">
    <form method="post">
        <?php if (!empty($data['model'])) { ?>
            <input type="hidden" value="<?= $data['model']->getId() ?>" name="id">
        <?php } ?>

            <div class="form-group">
                <label for="exampleFormControlInput1">Meno a priezvisko</label>
                <textarea class="form-control" name="meno"><?= (!empty($data['model']) ? $data['model']->getMeno() : "") ?></textarea>
                <?php if(isset($data['err']['meno'])) {
                    foreach ($data['err']['meno'] as $err) {
                        ?>
                        <div>
                            <h5><?= $err ?></h5>
                        </div>
                    <?php }} ?>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Popis</label>
                <textarea class="form-control" name="popis" ><?= (!empty($data['model']) ? $data['model']->getPopis() : "")  ?></textarea>
                <?php if(isset($data['err']['popis'])) {
                    foreach ($data['err']['popis'] as $err) {
                        ?>
                        <div>
                            <h5><?= $err ?></h5>
                        </div>
                    <?php }} ?>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Vek</label>
                <textarea class="form-control" name="vek"><?= (!empty($data['model']) ? $data['model']->getVek() : "")  ?></textarea>
                <?php if(isset($data['err']['vek'])) {
                    foreach ($data['err']['vek'] as $err) {
                        ?>
                        <div>
                            <h5><?= $err ?></h5>
                        </div>
                    <?php }} ?>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Foto</label>
                <textarea class="form-control" name="photo"><?= (!empty($data['model']) ? $data['model']->getPhoto() : "")  ?></textarea>
            </div>

        <button type="submit" class="btn btn-secondary btn-lg btn-block">Odoslat</button>
    </form>
</div>