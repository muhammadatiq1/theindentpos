<?php
/**
 * @var array $allowed_modules
 */
?>

<?= view('partial/header') ?>

<script type="text/javascript">
    dialog_support.init("a.modal-dlg");
</script>

<h3 class="text-center"><?= lang('Common.welcome_message') ?></h3>

<div id="home_module_list">
    <?php foreach($allowed_modules as $module) { ?>
        
        <div class="module_item" title="<?= lang("Module.$module->module_id" . '_desc') ?>">
            <a href="<?= base_url($module->module_id) ?>">
                <img src="<?= base_url("images/menubar/$module->module_id.svg") ?>" style="border-width: 0; height: 64px; max-width: 64px;" alt="Menubar Image">
            </a>
            <a href="<?= base_url($module->module_id) ?>"><?= lang("Module.$module->module_id") ?></a>
        </div>

        <?php if ($module->module_id == 'sales'): ?>
            <div class="module_item" title="Manage Bank Card Discounts">
                <a href="<?= site_url('card_discounts') ?>">
                    <div style="background-color: #2980b9; width: 64px; height: 64px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 3px auto; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <i class="glyphicon glyphicon-credit-card" style="color: white; font-size: 28px;"></i>
                    </div>
                </a>
                <a href="<?= site_url('card_discounts') ?>">Card Discount</a>
            </div>
        <?php endif; ?>

    <?php } ?>
</div>

<?= view('partial/footer') ?>