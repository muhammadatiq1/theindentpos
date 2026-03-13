<?php
/**
 * Modal Component
 * Reusable modal dialog component
 * 
 * Usage:
 * $modal = [
 *     'id' => 'modal-unique-id',
 *     'title' => 'Modal Title',
 *     'size' => 'md', // sm, md, lg, xl
 *     'content' => 'Modal content here'
 * ]
 * echo view('partial/components/modal', $modal)
 */
?>

<div class="modal" id="<?= $id ?? 'modal' ?>" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center;">
    <div class="modal-content" style="background: white; border-radius: 1rem; box-shadow: 0 20px 60px rgba(0,0,0,0.3); max-height: 90vh; overflow-y: auto; width: 90%; 
        <?php
        $widths = [
            'sm' => '100%; max-width: 24rem;',
            'md' => '100%; max-width: 28rem;',
            'lg' => '100%; max-width: 32rem;',
            'xl' => '100%; max-width: 36rem;'
        ];
        echo $widths[$size ?? 'md'] ?? $widths['md'];
        ?>
    ">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid #e5e7eb;">
            <h2 style="margin: 0; font-size: 1.25rem; font-weight: 700; color: #111827;"><?= $title ?? 'Modal' ?></h2>
            <button type="button" onclick="document.getElementById('<?= $id ?? 'modal' ?>').style.display='none'" style="background: none; border: none; cursor: pointer; font-size: 1.5rem; color: #6b7280;">
                ×
            </button>
        </div>
        <div style="padding: 1.5rem;">
            <?= $content ?? '' ?>
        </div>
        <?php if (isset($footer)): ?>
            <div style="padding: 1.5rem; border-top: 1px solid #e5e7eb; display: flex; justify-content: flex-end; gap: 0.75rem;">
                <?= $footer ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    function showModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function hideModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Close modal when clicking outside
    document.getElementById('<?= $id ?? 'modal' ?>')?.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
</script>
