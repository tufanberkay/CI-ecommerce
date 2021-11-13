

<div class="add-category content" >
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("no-image")): ?>
                    <?php echo $this->session->flashdata("no-image"); ?>
                <?php endif; ?>
            </div>
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("empty-product-data")): ?>
                    <?php echo $this->session->flashdata("empty-product-data"); ?>
                <?php endif; ?>
            </div>
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("successful-product")): ?>
                    <?php echo $this->session->flashdata("successful-product"); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3>Ürün Ekle</h3>
        </div>
        <div class="col-md-6 offset-md-3 padtop">
            <?php echo form_open_multipart('admin/addProduct', '', '') ?>
            <div class="form-group">
                <label>Ürün İsmi:</label>
                <?php echo form_input('productName', '', 'class="form-control"'); ?>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 d-inline-block">
                    <label>Ürün Fiyatı:</label>
                    <?php echo form_input('productPrice', '', 'class="form-control"'); ?>
                </div>
                <div class="form-group col-md-6 d-inline-block">
                    <label>Ürün Stoku:</label>
                    <?php echo form_input('productStock', '', 'class="form-control"'); ?>
                </div>
            </div>
            <div class="form-group">
                <label>Ürün Açıklaması:</label>
                <?php echo form_textarea('productDesc', '', 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label>Ürün Görseli:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <?php echo form_upload('productImg', '', ''); ?>
            </div>
            <div class="form-group">
                <label>Ürün Kategorisi:</label>
                <?php
                $categoriesOptions = array();
                foreach ($categories->result() as $category) {
                    $categoriesOptions[$category->cId] = $category->cName;
                }
                echo form_dropdown('categoryId', $categoriesOptions, '', 'class="form-control"')
                ?>
            </div>
            <div class="form-group">
                <?php echo form_submit('Add Product', 'Ürünü Ekle', 'class="button-right btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>