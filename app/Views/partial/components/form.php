<?php
/**
 * Form Builder Component
 * Simplifies form creation with modern styling
 * 
 * Usage:
 * $form = [
 *     'fields' => [
 *         ['name' => 'username', 'type' => 'text', 'label' => 'Username', 'required' => true],
 *         ['name' => 'email', 'type' => 'email', 'label' => 'Email', 'required' => true],
 *         ['name' => 'message', 'type' => 'textarea', 'label' => 'Message', 'rows' => 4]
 *     ]
 * ]
 */
?>

<form method="<?= $method ?? 'POST' ?>" action="<?= $action ?? '#' ?>" class="modern-form">
    <?php foreach ($fields ?? [] as $field): ?>
        <?php
        $fieldType = $field['type'] ?? 'text';
        $fieldName = $field['name'] ?? '';
        $fieldLabel = $field['label'] ?? '';
        $fieldValue = $field['value'] ?? '';
        $fieldPlaceholder = $field['placeholder'] ?? '';
        $fieldRequired = $field['required'] ?? false;
        $fieldError = isset($field['error']) ? $field['error'] : '';
        $fieldHelp = $field['help'] ?? '';
        $fieldClass = isset($field['error']) ? 'form-control is-invalid' : 'form-control';
        ?>

        <div class="form-group">
            <?php if ($fieldLabel): ?>
                <label for="<?= $fieldName ?>" class="form-label">
                    <?= $fieldLabel ?>
                    <?php if ($fieldRequired): ?>
                        <span style="color: var(--danger);">*</span>
                    <?php endif; ?>
                </label>
            <?php endif; ?>

            <?php if ($fieldType === 'textarea'): ?>
                <textarea
                    id="<?= $fieldName ?>"
                    name="<?= $fieldName ?>"
                    class="<?= $fieldClass ?>"
                    placeholder="<?= $fieldPlaceholder ?>"
                    rows="<?= $field['rows'] ?? 4 ?>"
                    <?php if ($fieldRequired): ?>required<?php endif; ?>
                ><?= esc($fieldValue) ?></textarea>

            <?php elseif ($fieldType === 'select'): ?>
                <select
                    id="<?= $fieldName ?>"
                    name="<?= $fieldName ?>"
                    class="<?= $fieldClass ?>"
                    <?php if ($fieldRequired): ?>required<?php endif; ?>
                >
                    <option value=""><?= $field['default_text'] ?? 'Select an option' ?></option>
                    <?php foreach ($field['options'] ?? [] as $optValue => $optLabel): ?>
                        <option value="<?= $optValue ?>" <?php if ($optValue == $fieldValue) echo 'selected'; ?>>
                            <?= $optLabel ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            <?php elseif ($fieldType === 'checkbox'): ?>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <input
                        type="checkbox"
                        id="<?= $fieldName ?>"
                        name="<?= $fieldName ?>"
                        value="1"
                        <?php if ($fieldValue) echo 'checked'; ?>
                        <?php if ($fieldRequired): ?>required<?php endif; ?>
                    >
                    <label for="<?= $fieldName ?>" style="margin: 0; cursor: pointer;"><?= $field['checkbox_label'] ?? '' ?></label>
                </div>

            <?php elseif ($fieldType === 'radio'): ?>
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <?php foreach ($field['options'] ?? [] as $optValue => $optLabel): ?>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <input
                                type="radio"
                                id="<?= $fieldName . '_' . $optValue ?>"
                                name="<?= $fieldName ?>"
                                value="<?= $optValue ?>"
                                <?php if ($optValue == $fieldValue) echo 'checked'; ?>
                                <?php if ($fieldRequired): ?>required<?php endif; ?>
                            >
                            <label for="<?= $fieldName . '_' . $optValue ?>" style="margin: 0; cursor: pointer;"><?= $optLabel ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <input
                    type="<?= $fieldType ?>"
                    id="<?= $fieldName ?>"
                    name="<?= $fieldName ?>"
                    class="<?= $fieldClass ?>"
                    placeholder="<?= $fieldPlaceholder ?>"
                    value="<?= esc($fieldValue) ?>"
                    <?php if ($fieldRequired): ?>required<?php endif; ?>
                >
            <?php endif; ?>

            <?php if ($fieldError): ?>
                <div class="invalid-feedback"><?= $fieldError ?></div>
            <?php endif; ?>

            <?php if ($fieldHelp): ?>
                <div class="form-text"><?= $fieldHelp ?></div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>

    <div style="display: flex; gap: 0.75rem; margin-top: 2rem;">
        <button type="submit" class="btn btn-primary">
            <?= $submit_text ?? lang('Common.submit') ?>
        </button>
        <?php if (isset($show_cancel) && $show_cancel): ?>
            <button type="reset" class="btn btn-secondary">
                <?= lang('Common.cancel') ?>
            </button>
        <?php endif; ?>
    </div>
</form>

<style>
    .modern-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--text-primary);
        font-size: 0.95rem;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.75rem 1rem;
        font-family: var(--font-family-base);
        font-size: 1rem;
        line-height: var(--line-height-normal);
        color: var(--text-primary);
        background-color: var(--surface-primary);
        border: 1px solid var(--border-color);
        border-radius: var(--radius-lg);
        transition: border-color var(--transition-base), box-shadow var(--transition-base);
        outline: none;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }

    .form-control.is-invalid {
        border-color: var(--danger);
    }

    .form-control.is-invalid:focus {
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
    }

    .form-text {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.875rem;
        color: var(--text-tertiary);
    }

    .invalid-feedback {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.875rem;
        color: var(--danger);
    }
</style>
