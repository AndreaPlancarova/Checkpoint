<?php


namespace App\Controllers;

use App\Core\AControllerBase;

use App\Models\Zamestnanec;

class ZamestnanciController extends AControllerBase
{

    public function index()
    {
        return Zamestnanec::getAll();
    }

    public function add()
    {

        if(!isset($_POST['meno'])) return null;
        $val = $this->validate($_POST['meno'], $_POST['popis'], $_POST['vek']);
        $zam = new Zamestnanec($_POST['meno'], $_POST['popis'], $_POST['vek'], $_POST['photo']);

        if ($val == null) {
            $zam->save();
            $this->redirectToIndex();
        }
        return [
            'model' => $zam,
            'err' => $val
        ];

    }

    public function delete()
    {
        if (isset($_GET['id']))
        {
            $zam = Zamestnanec::getOne($_GET['id']);
            $zam->delete();
        }

        $this->redirectToIndex();
    }

    public function edit()
    {
        $val = null;
        if(isset($_POST['id'])) {

            $val = $this->validate($_POST['meno'], $_POST['popis'], $_POST['vek']);
            $zam = Zamestnanec::getOne($_POST['id']);
            $zam->setMeno($_POST['meno']);
            $zam->setPopis($_POST['popis']);
            $zam->setVek($_POST['vek']);
            $zam->setPhoto($_POST['photo']);

            if ($val == null) {
                $zam->save();
                $this->redirectToIndex();
            }
        } else {
            $zam = Zamestnanec::getOne($_GET['id']);
        }

        return [
            'model' => $zam,
            'err' => $val
        ];

    }

    public function validate($meno, $popis, $vek)
    {
        $vekErrors = [];
        $menoErrors = [];
        $popisErrors = [];

        if(strlen($meno) < 3)
        {
            $menoErrors[] = "Meno musi byt dlhsie ako 3 znaky";
        }

        if(!is_numeric($vek))
        {
            $vekErrors[] = "Neplatna hodnota, zadaj číslo.";
        }

        if($vek < 18 && is_numeric(($vek)))
        {
            $vekErrors[] = "Inštruktor musí mať viac ako 18 rokov.";
        }

        if($vek > 100 && is_numeric(($vek)))
        {
            $vekErrors[] = "Zadaj realny vek, nie na kolko sa citis.";
        }

        if(strlen($popis) < 10)
        {
            $popisErrors[] = "Prilis kratky text.";
        }
        return count($menoErrors) > 0 || count($popisErrors) || count($vekErrors) > 0 ? ['meno' => $menoErrors, 'popis' =>$popisErrors, 'vek' =>$vekErrors] : null;

    }

    public function redirectToIndex()
    {
        header("Location:http://localhost/VAIIsem.git/mvc/index.php?c=Zamestnanci");
        die();
    }
}