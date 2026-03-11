<?= view('partial/header') ?>

<script type="text/javascript">
$(document).ready(function() {
    // This activates the popup functionality
    if (typeof dialog_support !== 'undefined') {
        dialog_support.init('a.modal-dlg, button.modal-dlg');
    }
});
</script>

<div id="title_bar" class="btn-toolbar print_hide" style="margin-bottom: 15px;">
    <button class="btn btn-info btn-sm pull-right modal-dlg" data-btn-submit="<?= lang('Common.submit') ?>" data-href="<?= site_url('card_discounts/view/-1') ?>" title="New Card Discount">
        <span class="glyphicon glyphicon-credit-card">&nbsp;</span> New Card Discount
    </button>
</div>

<div id="table_holder">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Bank Name</th>
                <th>Card Kind</th>
                <th>Card Type</th>
                <th>Discount (%)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(empty($manage_table)): ?>
                <tr>
                    <td colspan="5" class="text-center">No cards found. Click 'New Card Discount' to add one.</td>
                </tr>
            <?php else: ?>
                <?php foreach($manage_table as $card): ?>
                <tr>
                    <td><?= esc($card['bank_name']) ?></td>
                    <td><?= esc($card['card_kind']) ?></td>
                    <td><?= esc($card['card_type']) ?></td>
                    <td><b style="color:red;"><?= esc($card['discount_percentage']) ?>%</b></td>
                    <td>
                        <a href="<?= site_url('card_discounts/view/' . $card['card_id']) ?>" class="modal-dlg btn btn-xs btn-warning" data-btn-submit="<?= lang('Common.submit') ?>" title="Edit Card">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <a href="<?= site_url('card_discounts/delete/' . $card['card_id']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this card?');">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('partial/footer') ?>