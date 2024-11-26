<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Inbox</h1>
        <div class="ms-auto">
            <button class="btn btn-outline-primary btn-sm">Mark All As Read</button>
            <button class="btn btn-outline-danger btn-sm">Delete All</button>
        </div>
    </div>
    <div class="accordion" id="notificationsAccordion">
        <?php foreach ($templateParams["notifications"] as $index => $notification): ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                        <?php echo $notification["subject"]; ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#notificationsAccordion">
                    <div class="accordion-body">
                        <p class="mb-1"><?php echo $notification["description"]; ?></p>
                        <small class="text-muted d-block mb-3"><?php echo $notification["date"]; ?></small>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>