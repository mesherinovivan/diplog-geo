<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of accounts_model
 *
 * @author i_mesherinov
 */
class Base_Model  extends CI_Model {
    //put your code here
    protected $view_table;
    protected $table;
    private   $version_sqlserver;
    
    function __construct(){
        parent::__construct();
        $params = 'sqlsrv://Менеджер_Веб:123@192.168.10.1\sqlserver/TSCRM33 SMS Work';
        $this->load->database($params);
        $this->version_sqlserver = (int)substr($this->db->version(),0,2);
    }
    public function getObjectByID($id){
        return getObjectByFields('ID',$id);
    }
    public function getObjectByFields($fieldName,$fieldValue){
        $this->db->where($fieldName,$fieldValue);
        $query = $this->db->get($this->view_table);
        return $query->result('array');
    }
    public function getObjectByIDJson($id){
        return json_encode($this->getObjectByFields('ID',$id));
    }
    /// Будет работать только с MS SQL 2012 так как в нем реализовано новые 
    //возможности T-SQL
    public function getObjectsList($offset,$rows){
        if ($this->version_sqlserver > 10){
            $sql = 'SELECT * FROM '.$this->view_table.' ORDER BY ID OFFSET ? ROWS FETCH NEXT ? ROWS ONLY';
            
        }
        else{
            $sql =  'WITH TSObjects AS
                    (
                      SELECT '.$this->view_table.'.*, ROW_NUMBER() OVER (ORDER BY ID) AS RowNum
                      FROM '.$this->view_table.'
                    )
                    SELECT *
                    FROM TSObjects
                    WHERE RowNum BETWEEN ? AND ?
                    ORDER BY RowNum';
        }
        $query = $this->db->query($sql,array($offset,$rows));
        return $query->result('array');
    }
    public function getObjectsListIDJson($offset,$rows){
        return json_encode($this->getObjectsList($offset,$rows));
    }
}

?>
