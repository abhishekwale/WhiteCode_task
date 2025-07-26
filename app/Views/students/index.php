<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-3">
    <h2>Student List</h2>
    <a class="btn btn-primary" href="/student/create">+ Add Student</a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= esc($student['name']) ?></td>
            <td><?= esc($student['email']) ?></td>
            <td><?= esc($student['phone']) ?></td>
            <td>
                <a href="/student/edit/<?= $student['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="/student/delete/<?= $student['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
