<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Inbox</h1>
        <div class="ms-auto">
            <button class="btn btn-outline-primary btn-sm">Mark All As Read</button>
            <button class="btn btn-outline-danger btn-sm">Delete All</button>
        </div>
    </div>
    <ul class="list-group">
        <?php foreach ($templateParams["notifications"] as $notification): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="mb-1"><?php echo $notification["subject"]; ?></h2>
                    <small class="text-muted"><?php echo $notification["date"]?></small>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary">Read</button>
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>