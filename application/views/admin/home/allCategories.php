

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
    <div style="color: red; text-align: center">
        <?php if($this->session->flashdata("empty-category-name")): ?>
            <?php echo $this->session->flashdata("empty-category-name"); ?>
        <?php endif; ?>
    </div>
    <div style="color: green; text-align: center">
        <?php if($this->session->flashdata("change-succes")): ?>
            <?php echo $this->session->flashdata("change-succes"); ?>
        <?php endif; ?>
    </div>
    <div style="color: green; text-align: center">
        <?php if($this->session->flashdata("add-successful")): ?>
            <?php echo $this->session->flashdata("add-successful"); ?>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 padtop">
            <h2>Tüm Kategoriler</h2>
            <div class="error"></div>
            <?php if ($allCategories): ?>
            <table class="table table-dashed">
                <?php foreach($allCategories as $category): ?>
                    <tr class="ccat<?php echo $category->cName; ?>">
                        <td>
                            <?php echo $category->cName ?>
                        </td>
                        <td></td>
                        <td>
                            <a href="<?php echo site_url('admin/editCategory/'. $category->cName) ?>" class="btn btn-info">
                                Düzenle
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-danger delcat" data-id="<?php echo $category->cName ?>" data-text="<?php echo $this->encryption->encrypt($category->cName) ?>">
                                Sil
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    </table>
            <?php echo $links; ?>
            <?php else: ?>
            Kategori Bulunamadı.
            <?php endif; ?>
        </div>
    </div>
</div>