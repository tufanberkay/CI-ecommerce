<?php

class ModAdmin extends CI_Model
{
    public function checkAdmin($data) {
        return $this->db->get_where('admin',$data)
            ->result_array();
    }

        //<----------- CATEGORY START ------------>//

    public function checkCategory($data) {
        return $this->db->get_where('categories', array('cName'=>$data['cName']));
    }

    public function addCategory($data) {
        return $this->db->insert('categories', $data);
    }

    public function getAllCategories() {
        return $this->db->get_where('categories', array('cStatus'=>1))->num_rows();
    }

    public function fetchAllCategories($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get_where('categories', array('cStatus'=>1));
        if ($query->num_rows() > 0 ) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function checkCategoryById($cName) {
        return $this->db->get_where('categories', array('cName'=>$cName))->result_array();
    }

    public function updateCategory($data,$cName){
        $this->db->where('cName',$cName);
        return $this->db->update('categories',$data);
    }

    public function deleteCategory($cName) {
        $this->db->where('cName', $cName);
        return $this->db->delete('categories');
    }

    public function getCategories() {
        return $this->db->select('cId,cName')->from('categories')->where('cStatus', 1)->get('');
    }

    //<----------- CATEGORY END ------------>//


    //<----------- PRODUCT START ------------>//

    public function checkProduct($data) {
        return $this->db->get_where('product', array(
            'pName'=>$data['pName'],
            'price'=>$data['price'],
            'stock'=>$data['stock'],
            'pDesc'=>$data['pDesc'],
            'pImage'=>$data['pImage'],
            'categoryId'=>$data['categoryId'],
            ));
    }

    public function addProduct($data) {
        return $this->db->insert('product', $data);
    }

    public function getAllProducts() {
        return $this->db->get_where('product', array('pStatus'=>1))->num_rows();
    }

    public function fetchAllProducts($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->order_by('pId', 'desc');
        $query = $this->db->get_where('product', array('pStatus'=>1));
        if ($query->num_rows() > 0 ) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function checkProductById($pId) {
        return $this->db->get_where('product', array('pId' =>$pId))->result_array();
    }

    public function updateProduct($data,$prodId){
        $this->db->where('pId',$prodId);
        return $this->db->update('product',$data);
    }

    public function deleteProduct($pName) {
        $this->db->where('pName', $pName);
        return $this->db->delete('product');
    }

    public function getProductImage($pName) {
        return $this->db->select('pImage')
            ->from('product')
            ->where('pName', $pName)
            ->get()
            ->result_array();
    }

    //<----------- PRODUCT END ------------>//


}