<?php


namespace App\Controllers;

use App\Core\AControllerBase;

use App\Models\Frayer;
use App\Models\Semka;

class SemkaController extends AControllerBase
{

    public function index()
    {
        return Frayer::getAll();
    }

    public function add()
    {
        if(!isset($_POST['nazov'])) return null;

        $art = new Frayer($_POST['nazov'], $_POST['definicia'], $_POST['vlastnosti'], $_POST['priklady'], $_POST['nonpriklady']);
        $art->save();

        $this->redirectToIndex();
    }

    public function delete()
    {
        if (isset($_GET['id']))
        {
            $fr = Frayer::getOne($_GET['id']);
            $fr->delete();
        }

        $this->redirectToIndex();
    }

    public function edit()
    {
        $val = null;
        if(isset($_POST['id'])) {

                $val = $this->validate($_POST['nazov'], $_POST['definicia']);
                $fr = Frayer::getOne($_POST['id']);
                $fr->setNazov($_POST['nazov']);
                $fr->setDefinicia($_POST['definicia']);
                $fr->setDefinicia($_POST['vlastnosti']);
                $fr->setDefinicia($_POST['priklady']);
                $fr->setDefinicia($_POST['nonpriklady']);

                if ($val == null) {
                    $fr->save();
                    $this->redirectToIndex();
                }
            } else {
                $fr = Frayer::getOne($_GET['id']);
            }

            return [
                'model' => $fr,
                'err' => $val
            ];

    }

    public function validate($nazov, $definicia)
    {
        $titleErrors = [];
        if(strlen($nazov) < 3)
        {
            $titleErrors[] = "Nazov musi byt dlhsi ako 3 znaky";
        }
        if(is_numeric($nazov[0]))
        {
            $titleErrors[] = "Nazov nesmie zacinat cislom.";
        }
        $textErrors = [];
        if(strlen($definicia) < 20)
        {
            $textErrors[] = "Prilis kratky text.";
        }
        return count($titleErrors) > 0 || count($textErrors) > 0 ? ['nazov' => $titleErrors, 'text' =>$textErrors] : null;

    }

    public function redirectToIndex()
    {
        header("Location:http://localhost/VAIIsem.git/mvc/index.php?c=Semka");
        die();
    }
}