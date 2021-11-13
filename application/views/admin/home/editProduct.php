

<div class="add-category content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("successful-product")): ?>
                    <?php echo $this->session->flashdata("successful-product"); ?>
                <?php endif; ?>
            </div>
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("available-data")): ?>
                    <?php echo $this->session->flashdata("available-data"); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <h3>Kategoriyi Düzenle</h3>
        </div>
        <div class="col-md-5 offset-md-3 padtop">
            <?php echo form_open_multipart('admin/updateProduct', '', '') ?>

            <label>Ürün İsmi:</label>
            <div class="form-group">
                <?php echo form_input('productName', $product[0]['pName'], 'class="form-control"'); ?>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 d-inline-block">
                    <label>Ürün Fiyatı:</label>
                    <div class="form-group">
                        <?php echo form_input('productPrice', $product[0]['price'], 'class="form-control"'); ?>
                    </div>
                </div>
                <div class="form-group col-md-6 d-inline-block">
                    <label>Ürün Stoku:</label>
                    <div class="form-group">
                        <?php echo form_input('productStock', $product[0]['stock'], 'class="form-control"'); ?>
                    </div>
                </div>
            </div>

            <label>Ürün Açıklaması:</label>
            <div class="form-group">
                <?php echo form_textarea('productDesc', $product[0]['pDesc'], 'class="form-control"'); ?>
            </div>

            <input type="hidden" name="pDi" value="<?php echo $product[0]['pId'] ?>">
            <input type="hidden" name="oldimg" value="<?php echo $product[0]['pImage'] ?>">

            <label>Ürün Görseli:</label>
            <div class="form-group">
                <?php echo form_upload('productImage', '', ''); ?>
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
                <?php echo form_submit('Update Product', 'Ürünü Düzenle', 'class="button-right btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
        <div class="col-md-4">
            <img style="margin-left: 50px" width="500px" height="600px" src="<?php echo base_url('assets/images/products/' . $product[0]['pImage'])?>" class="img-responsive">
        </div>
    </div>
</div>