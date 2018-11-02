<?php
//ini_set("memory_limit","-1");
/**
* Modelo de index controller en esta parte va todo lo relacionado con al capa de negocio
* como lo por ejemplo metodos en los cuales se hacen consultas directas a la base de datos,
 * web services
 * @author Francisco Delgado <packo6300@gmail.com>
*/
class Application_Model_IndexModel {
    public $db;
    public $_adapter;
    
    public function __construct(array $options = null){
        if (is_array($options)) {
            $this->setOptions($options);
        }
        $this->db = new Application_Model_UserinfoMapper();
        $this->_adapter = $this->db->getAdapter();
        return $this->_adapter;
    }
}
