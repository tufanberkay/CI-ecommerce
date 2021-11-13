<?php

class Admin extends CI_Controller
{
    public function index(){
        if($this->session->userdata('aId')){
            $this->load->view("admin/header/header");
            $this->load->view("admin/header/css");
            $this->load->view("admin/header/navtop");
            $this->load->view("admin/header/navleft");
            $this->load->view("admin/home/index");
            $this->load->view("admin/header/footer");
            $this->load->view("admin/header/htmlclose");
        }
        else {
            redirect("admin/login");
        }
    }

    public function login() {
        if (!adminLoggedin()){
            $this->load->view("admin/login");
        }else {
            redirect('admin');
        }

    }

    public function checkAdmin(){
        $data['aEmail'] = $this->input->post('email',true);
        $data['aPassword'] = $this->input->post('password',true);

        if(!empty($data['aEmail']) && !empty($data['aPassword'])) {
            $admindata = $this->modAdmin->checkAdmin($data);
            if(count($admindata) == 1) {
                $forSession = array(
                    'aId'=>$admindata[0]['aId'],
                    'aName'=>$admindata[0]['aName'],
                    'aEmail'=>$admindata[0]['aEmail'],
                    'aDate'=>$admindata[0]['aDate'],
                    'aLastname'=>$admindata[0]['aLastname']
                );
                $this->session->set_userdata($forSession);
                if($this->session->userdata('aId')){
                    redirect("admin");
                }
            }else {
                setFlashData('error1', 'Mail Adresi veya Şifre hatalı...', 'admin/login');
            }
        }
        else{
            setFlashData('error', 'Mail adresi ve şifre boş bırakılamaz...', 'admin/login');
        }

    }

    public function logOut(){
        if($this->session->userdata('aId')) {
            $this->session->set_userdata('aId','');
            setFlashData( 'error2', 'Güvenli Çıkış Yapıldı.', 'admin/login');
        }
        else {
            redirect("admin/login");
        }
    }



    // -------------------CATEGORY START-------------//

    public function newCategory(){
        if (adminLoggedin()){
            $this->load->view("admin/header/header");
            $this->load->view("admin/header/css");
            $this->load->view("admin/header/navtop");
            $this->load->view("admin/header/navleft");
            $this->load->view("admin/home/newCategory");
            $this->load->view("admin/header/footer");
            $this->load->view("admin/header/htmlclose");
        }else {
            redirect("admin/login");
        }
    }

    public function adddCategory(){
        if (adminLoggedin()){
            $data['cName'] = $this->input->post('categoryName', 'true');
            if (!empty($data['cName'])){
                $addDAta = $this->modAdmin->checkCategory($data);
                if ($addDAta->num_rows() > 0) {
                    setFlashData( 'available-data', 'Data zaten mevcut', 'admin/newCategory');
                }else {
                    $addDAta = $this->modAdmin->addCategory($data);
                    setFlashData( 'add-successful', 'Kategori Eklendi', 'admin/allCategories');
                }
            }else{
                setFlashData( 'empty-data', 'Data Girilmedi....', 'admin/newCategory');
            }
        }else {
            redirect("admin/login");
        }
    }

    public function allCategories(){
        if (adminLoggedin()){
            $config['base_url'] = site_url('admin/allCategories');
            $totalRows = $this->modAdmin->getAllCategories();

            $config['total_rows'] = $totalRows;
            $config['per_page'] = 8;
            $config['uri_segment'] = 3;
            $this->load->library('pagination');
            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
            $data['allCategories'] = $this->modAdmin->fetchAllCategories($config['per_page'], $page);
            $data['links'] = $this->pagination->create_links();

            $this->load->view("admin/header/header");
            $this->load->view("admin/header/css");
            $this->load->view("admin/header/navtop");
            $this->load->view("admin/header/navleft");
            $this->load->view("admin/home/allCategories", $data);
            $this->load->view("admin/header/footer");
            $this->load->view("admin/header/htmlclose");
        }else {
            redirect("admin/login");
        }
    }

    public function editCategory($cName){
        if (adminLoggedin()) {
            if (!empty($cName) && isset($cName)){
                $data['category'] = $this->modAdmin->checkCategoryById($cName);
                if (count($data['category']) == 1) {
                    $this->load->view("admin/header/header");
                    $this->load->view("admin/header/css");
                    $this->load->view("admin/header/navtop");
                    $this->load->view("admin/header/navleft");
                    $this->load->view("admin/home/editCategory", $data);
                    $this->load->view("admin/header/footer");
                    $this->load->view("admin/header/htmlclose");
                }else {
                    redirect("admin/allCategories");
                }
            }else {
                redirect("admin/allCategories");
            }

        }else {
            redirect("admin/login");
        }
    }

    public function updateCategory(){
        if (adminLoggedin()) {
            $data['cName'] = $this->input->post('categoryName',true);
            $cName = $this->input->post('xname', true);
            if (!empty($data['cName']) && isset($data['cName'])) {
                $reply = $this->modAdmin->updateCategory($data,$cName);
                if($reply) {
                    setFlashData('change-succes', 'Kategori ismi başarıyla değiştirildi', 'admin/allCategories');
                }
            }
            else {
                setFlashData('empty-category-name', 'Kategori ismi boş bırakılamaz', 'admin/allCategories');
            }
        }else {
            redirect("admin/login");
        }
    }

    public function deleteCategory(){
        if (adminLoggedin()) {
            if ($this->input->is_ajax_request()) {
                $this->input->post('id', true);
                $cId = $this->input->post('text', true);
                if (!empty($cId) && isset($cId)) {
                    $cId = $this->encryption->decrypt($cId);
                    $checkMd = $this->modAdmin->deleteCategory($cId);
                    if ($checkMd) {
                        $data['return'] = true;
                        $data['message'] = "Silme işlemi başarılı";
                        echo json_encode($data);
                    }else {
                        $data['return'] = false;
                        $data['message'] = "Bu kategoriyi şuan silemezsiniz.";
                        echo json_encode($data);
                    }
                }
                else {
                    $data['return'] = false;
                    $data['message'] = "Kategori bulunamadı.";
                    echo json_encode($data);
                }
            }
            else {
                redirect("admin");
            }
        }
        else {
            redirect("admin/login");
        }
    }

    // -------------------CATEGORY END-------------//


    // -------------------PRODUCT START-------------//

    public function newProduct() {
        if (adminLoggedin()){
            $data['categories'] = $this->modAdmin->getCategories();
            $this->load->view("admin/header/header");
            $this->load->view("admin/header/css");
            $this->load->view("admin/header/navtop");
            $this->load->view("admin/header/navleft");
            $this->load->view("admin/home/newProduct", $data);
            $this->load->view("admin/header/footer");
            $this->load->view("admin/header/htmlclose");
        }else {
            redirect("admin/login");
        }
    }

    public function addProduct() {
        if (adminLoggedin()) {
            $data['pName'] = $this->input->post('productName', true);
            $data['price'] = $this->input->post('productPrice', true);
            $data['stock'] = $this->input->post('productStock', true);
            $data['pDesc'] = $this->input->post('productDesc', true);
            $data['categoryId'] = $this->input->post('categoryId', true);

            if (!empty($data['pName']) && !empty($data['price']) && !empty($data['stock']) && !empty($data['categoryId'])) {
                $path = realpath(APPPATH.'../assets/images/products/');
                $config['upload_path'] = $path;
                $config['max-size'] = 100;
                $config['allowed_types'] = 'jpeg|gif|jpg|png';
                $this->load->library('upload',$config);
                if (!$this->upload->do_upload('productImg')){
                    setFlashData('no-image', 'Ürün İçin Bir Görsel Seçilmedi', 'admin/newProduct');
                }
                else {
                    $fileName = $this->upload->data();
                    $data['pImage'] = $fileName['file_name'];
                    $data['pDate'] = date('Y-m-d H:i:s');
                }
                $addDAta = $this->modAdmin->checkProduct($data);
                if ($addDAta->num_rows() > 0) {
                    setFlashData('available-products', 'Ürün zaten mevcut', 'admin/newProduct');
                }
                else{
                    $addDAta = $this->modAdmin->addProduct($data);
                    setFlashData('successful-product', 'Ürün başarıyla eklendi.', 'admin/newProduct');
                }
            }
            else {
                setFlashData('empty-product-data', 'Eksik alan bıraktınız.', 'admin/newProduct');
            }
        }
        else {
            redirect("admin/login");
        }
    }

    public function allProducts(){
        if (adminLoggedin()){
            $config['base_url'] = site_url('admin/allProducts');
            $totalRows = $this->modAdmin->getAllProducts();

            $config['total_rows'] = $totalRows;
            $config['per_page'] = 8;
            $config['uri_segment'] = 3;
            $this->load->library('pagination');
            $this->pagination->initialize($config);

            $page = ($this->uri->segment(3)) ? $this->uri->segment(3):0;
            $data['allProducts'] = $this->modAdmin->fetchAllProducts($config['per_page'], $page);
            $data['links'] = $this->pagination->create_links();

            $this->load->view("admin/header/header");
            $this->load->view("admin/header/css");
            $this->load->view("admin/header/navtop");
            $this->load->view("admin/header/navleft");
            $this->load->view("admin/home/allProducts", $data);
            $this->load->view("admin/header/footer");
            $this->load->view("admin/header/htmlclose");
        }else {
            redirect("admin/login");
        }
    }

    public function editProduct($pId){
        if (adminLoggedin()) {
            if (!empty($pId) && isset($pId)){
                $data['product'] = $this->modAdmin->checkProductById($pId);
                $data['categories'] = $this->modAdmin->getCategories();
                if (count($data['product']) == 1) {
                    $this->load->view("admin/header/header");
                    $this->load->view("admin/header/css");
                    $this->load->view("admin/header/navtop");
                    $this->load->view("admin/header/navleft");
                    $this->load->view("admin/home/editProduct", $data);
                    $this->load->view("admin/header/footer");
                    $this->load->view("admin/header/htmlclose");
                }else {
                    redirect("admin/allProducts");
                }
            }else {
                redirect("admin/allProducts");
            }

        }else {
            redirect("admin/login");
        }
    }

    /*
        public function updateProduct(){
        if (adminLoggedin()) {
            $data['pName'] = $this->input->post('productName',true);
            $data['price'] = $this->input->post('productPrice',true);
            $data['stock'] = $this->input->post('productStock',true);
            $data['pDesc'] = $this->input->post('productDesc',true);
            $data['categoryId'] = $this->input->post('categoryId',true);
            $modeId = $this->input->post('mDi', true);
            $oldImg = $this->input->post('oldimg', true);
            if (!empty($data['pName']) && !empty($data['price']) && !empty($data['stock']) && !empty($data['pDesc']) && !empty($data['categoryId'])) {
                if (isset($_FILES['pImages']) && is_uploaded_file($_FILES['pImages']['tmp_name'])) {

                }
                $reply = $this->modAdmin->updateCategory($data,$pName);
                if($reply) {
                    setFlashData('change-succes', 'Ürün ismi başarıyla değiştirildi', 'admin/allProducts');
                }
            }
            else {
                setFlashData('empty-category-name', 'Kategori ismi boş bırakılamaz', 'admin/allProducts');
            }
        }else {
            redirect("admin/login");
        }
    }

    */




    public function deleteProduct(){
        if (adminLoggedin()) {
            if ($this->input->is_ajax_request()) {
                $this->input->post('id', true);
                $pId = $this->input->post('text', true);
                if (!empty($pId) && isset($pId)) {
                    $pId = $this->encryption->decrypt($pId);
                    $oldImage = $this->modAdmin->getProductImage($pId);
                    if (!empty($oldImage) && count($oldImage) == 1) {
                        $realImage = $oldImage[0]['pImage'];
                    }
                    $checkMd = $this->modAdmin->deleteProduct($pId);
                    if ($checkMd) {
                        if (!empty($realImage) && isset($realImage)) {
                            $path = realpath(APPPATH.'../assets/images/products/');
                            if (file_exists($path.'/'.$realImage)) {
                                unlink($path.'/'.$realImage);
                            }
                        }
                        $data['return'] = true;
                        $data['message'] = "Silme işlemi başarılı";
                        echo json_encode($data);
                    }else {
                        $data['return'] = false;
                        $data['message'] = "Bu Ürünü şuan silemezsiniz.";
                        echo json_encode($data);
                    }
                }
                else {
                    $data['return'] = false;
                    $data['message'] = "Ürün bulunamadı.";
                    echo json_encode($data);
                }
            }
            else {
                redirect("admin");
            }
        }
        else {
            redirect("admin/login");
        }
    }

    public function updateProduct() {
        if (adminLoggedin()) {
            $data['pName'] = $this->input->post('productName', true);
            $data['price'] = $this->input->post('productPrice', true);
            $data['stock'] = $this->input->post('productStock', true);
            $data['pDesc'] = $this->input->post('productDesc', true);
            $data['categoryId'] = $this->input->post('categoryId', true);
            $prodId = $this->input->post('pDi', true);
            $oldImg = $this->input->post('oldimg', true);

            if (
                !empty($data['pName']) && !empty($data['price']) && !empty($data['stock']) && !empty($data['categoryId'])) {

                if (isset($_FILES['productImage']) && is_uploaded_file($_FILES['productImage']['tmp_name'])) {
                    $path = realpath(APPPATH.'../assets/images/products/');
                    $config['upload_path'] = $path;
                    $config['max-size'] = 100;
                    $config['allowed_types'] = 'jpeg|gif|jpg|png';
                    $this->load->library('upload',$config);
                    if (!$this->upload->do_upload('productImg')){
                        setFlashData('no-image', 'Ürün İçin Bir Görsel Seçilmedi', 'admin/allProducts');
                    }
                    else {
                        $fileName = $this->upload->data();
                        $data['pImage'] = $fileName['file_name'];
                    }

                }

                $addDAta = $this->modAdmin->checkProduct($data);
                if ($addDAta->num_rows() > 0) {

                    if (!empty($data['pImage']) && isset($data['pImage'])) {
                        if (file_exists($path.'/'.$oldImg)) {
                            unlink($path.'/'.$oldImg);
                        }
                    }

                    setFlashData('available-products', 'Ürün zaten mevcut', 'admin/allProducts');
                }
                else{
                    $addDAta = $this->modAdmin->updateProduct($data, $prodId);
                    setFlashData('successful-product', 'Ürün başarıyla eklendi.', 'admin/allProducts');
                }
            }
            else {
                setFlashData('empty-product-data', 'Eksik alan bıraktınız.', 'admin/allProducts');
            }
        }
        else {
            redirect("admin/login");
        }
    }


    // -------------------PRODUCT END-------------//
}


