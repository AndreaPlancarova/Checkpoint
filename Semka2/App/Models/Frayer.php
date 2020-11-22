<?php

namespace App\Models;

use App\Core\Model;

class Frayer extends Model
{
    protected $id;
    protected $nazov;
    protected $definicia;
    protected $vlastnosti;
    protected $priklady;
    protected $nonpriklady;

    /**
     * Frayer constructor.
     * @param $nazov
     * @param $definicia
     * @param $vlastnosti
     * @param $priklady
     * @param $nonpriklady
     */
    public function __construct($nazov = "", $definicia = "", $vlastnosti="", $priklady="", $nonpriklady="")
    {
        $this->nazov = $nazov;
        $this->definicia = $definicia;
        $this->vlastnosti = $vlastnosti;
        $this->vlastnosti = $vlastnosti;
        $this->priklady = $priklady;
        $this->nonpriklady = $nonpriklady;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov)
    {
        $this->nazov = $nazov;
    }

    /**
     * @return mixed
     */
    public function getDefinicia()
    {
        return $this->definicia;
    }

    /**
     * @param mixed $definicia
     */
    public function setDefinicia($definicia)
    {
        $this->definicia = $definicia;
    }

    static public function setDbColumns()
    {
        return ['id', 'nazov', 'definicia', 'vlastnosti', 'priklady', 'nonpriklady'];
    }

    static public function setTableName()
    {
        return "model";
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getVlastnosti()
    {
        return $this->vlastnosti;
    }

    /**
     * @param mixed|string $vlastnosti
     */
    public function setVlastnosti($vlastnosti): void
    {
        $this->vlastnosti = $vlastnosti;
    }

    /**
     * @return mixed|string
     */
    public function getPriklady()
    {
        return $this->priklady;
    }

    /**
     * @param mixed|string $priklady
     */
    public function setPriklady($priklady): void
    {
        $this->priklady = $priklady;
    }

    /**
     * @return mixed|string
     */
    public function getNonpriklady()
    {
        return $this->nonpriklady;
    }

    /**
     * @param mixed|string $nonpriklady
     */
    public function setNonpriklady($nonpriklady): void
    {
        $this->nonpriklady = $nonpriklady;
    }
}