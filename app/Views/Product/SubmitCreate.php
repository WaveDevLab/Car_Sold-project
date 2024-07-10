<script>
<?php if ($error): ?>
Swal.fire({
    title: "เพิ่มรถยนต์ไม่สำเร็จ",
    text: "<?= $message ?>",
    icon: "error"
}).then(function() {
    window.location.href = "<?= base_url() ?>product/create";
});
<?php else: ?>
Swal.fire({
    title: "เพิ่มรถยนต์สำเร็จ!",
    text: "<?= $message ?>",
    icon: "success"
}).then(function() {
    window.location.href = "<?= base_url() ?>product";
});
<?php endif; ?>
</script>