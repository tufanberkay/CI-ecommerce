

<div class="add-category content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div style="display: flex; justify-content: center; font-size: 20px; color: red; padding-top: 30px">
                <?php if($this->session->flashdata("empty-data")): ?>
                    <?php echo $this->session->flashdata("empty-data"); ?>
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
        <div class="col-md-6 offset-md-3">
            <h3>Kategori Ekle</h3>
        </div>
        <div class="col-md-6 offset-md-3 padtop">
            <span>Kategori İsmi:</span>
            <?php echo form_open_multipart('admin/adddCategory', '', '') ?>
            <div class="form-group">
                <?php echo form_input('categoryName', '', 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <?php echo form_submit('Add Category', 'Kategoriyi Ekle', 'class="button-right btn btn-primary"'); ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>