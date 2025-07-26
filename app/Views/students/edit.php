<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2>Edit Student</h2>

<form method="post" action="/student/update/<?= $student['id'] ?>" class="mt-4">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= esc($student['name']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= esc($student['email']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?= esc($student['phone']) ?>" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/student" class="btn btn-secondary">Cancel</a>
</form>

<?= $this->endSection() ?>
