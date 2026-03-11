<ul id="error_message_box" class="error_message_box"></ul>

<?= form_open('card_discounts/save/' . $card_info['card_id'], ['id' => 'card_discount_form', 'class' => 'form-horizontal']) ?>
    <fieldset id="card_basic_info">
        
        <div class="form-group form-group-sm">
            <?= form_label('Bank Name <br><small>(Optional)</small>', 'bank_name', ['class' => 'control-label col-xs-3']) ?>
            <div class="col-xs-8">
                <?= form_input([
                    'name' => 'bank_name',
                    'id' => 'bank_name',
                    'class' => 'form-control input-sm',
                    'placeholder' => 'UBL, MCB, etc.',
                    'value' => $card_info['bank_name']
                ]) ?>
            </div>
        </div>

        <div class="form-group form-group-sm">
            <?= form_label('Card Kind', 'card_kind', ['class' => 'control-label col-xs-3 required']) ?>
            <div class="col-xs-8">
                <label class="radio-inline">
                    <input type="radio" name="card_kind" value="Debit Card" <?= ($card_info['card_kind'] == 'Debit Card') ? 'checked' : '' ?>> Debit Card
                </label>
                <label class="radio-inline">
                    <input type="radio" name="card_kind" value="Credit Card" <?= ($card_info['card_kind'] == 'Credit Card') ? 'checked' : '' ?>> Credit Card
                </label>
            </div>
        </div>

        <div class="form-group form-group-sm">
            <?= form_label('Card Type <br><small>(Optional)</small>', 'card_type', ['class' => 'control-label col-xs-3']) ?>
            <div class="col-xs-8">
                <?= form_input([
                    'name' => 'card_type',
                    'id' => 'card_type',
                    'class' => 'form-control input-sm',
                    'placeholder' => 'Gold, Platinum, Silver, etc.',
                    'value' => $card_info['card_type']
                ]) ?>
            </div>
        </div>

        <div class="form-group form-group-sm">
            <?= form_label('Discount (%) <br><small>(Optional)</small>', 'discount_percentage', ['class' => 'control-label col-xs-3']) ?>
            <div class="col-xs-8">
                <div class="input-group">
                    <?= form_input([
                        'name' => 'discount_percentage',
                        'id' => 'discount_percentage',
                        'class' => 'form-control input-sm',
                        'type' => 'number',
                        'step' => '0.01',
                        'min' => '0',
                        'value' => $card_info['discount_percentage']
                    ]) ?>
                    <span class="input-group-addon">%</span>
                </div>
            </div>
        </div>

    </fieldset>
<?= form_close() ?>

<script type="text/javascript">
$(document).ready(function() {
    // This script automatically closes the popup and refreshes the table when you click Submit
    $('#card_discount_form').validate({
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                success: function(response) {
                    dialog_support.hide();
                    window.location.reload();
                },
                dataType: 'json'
            });
        }
    });
});
</script>