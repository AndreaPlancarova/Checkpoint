<?php

namespace App\Models;

use App\Core\Model;

class Zamestnanec extends Model
{
    protected $id;
    protected $meno;
    protected $popis;
    protected $vek;
    protected $photo;

    /**
     * Zamestnanec constructor.
     * @param $meno;
     * @param $popis
     * @param $vek
     * @param $photo
     */
    public function __construct($meno = "", $popis = "", $vek = "", $photo = "")
    {
        $this->meno = $meno;
        $this->popis = $popis;
        $this->vek = $vek;
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */


    static public function setDbColumns()
    {
        return ['id', 'photo', 'popis', 'vek', 'meno'];
    }

    static public function setTableName()
    {
        return "zamestnanec";
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getMeno()
    {
        return $this->meno;
    }

    /**
     * @return mixed|string
     */
    public function getPopis()
    {
        return $this->popis;
    }

    /**
     * @return mixed|string
     */
    public function getVek()
    {
        return $this->vek;
    }

    /**
     * @return mixed|string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed|string $meno
     */
    public function setMeno($meno): void
    {
        $this->meno = $meno;
    }

    /**
     * @param mixed|string $popis
     */
    public function setPopis($popis): void
    {
        $this->popis = $popis;
    }

    /**
     * @param mixed|string $vek
     */
    public function setVek($vek): void
    {
        $this->vek = $vek;
    }

    /**
     * @param mixed|string $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }
}