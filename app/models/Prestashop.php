<?php

class Prestashop extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $prestashopId;

    /**
     *
     * @var string
     */
    public $prestashopNama;

    /**
     *
     * @var string
     */
    public $prestashopTanggal;

    /**
     *
     * @var string
     */
    public $prestashopStatus;

    /**
     *
     * @var string
     */
    public $prestashopFoto;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("generator");
        $this->setSource("prestashop");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'prestashop';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Prestashop[]|Prestashop|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Prestashop|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
