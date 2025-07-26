<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Add Student</h2>

<form method="post" action="/student/store" class="mt-4">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
    <a href="/student" class="btn btn-secondary">Cancel</a>
</form>

<?= $this->endSection() ?>
