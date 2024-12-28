<section class="container my-5">
    <h1 class="display-4 text-center">Inbox</h1>
    <?php if (!empty($templateParams["notifications"])): ?>
    <div class="accordion" id="notificationsAccordion">
        <?php foreach ($templateParams["notifications"] as $index => $notification): ?>
        <div class="accordion-item" id="notification-<?php echo $notification["notificationId"]; ?>">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed"
                        type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse-<?php echo $index; ?>"
                        data-notification-id="<?php echo $notification["notificationId"]; ?>">
                    <span><?php echo $notification["subject"]; ?></span>
                    <?php if ($notification["isRead"] == false): ?>
                    <span class='badge text-bg-dark mx-2'>New</span>
                    <?php endif; ?>
                </button>
            </h2>
            <div id="collapse-<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#notificationsAccordion">
                <div class="accordion-body">
                    <p class="mb-1"><?php echo $notification["description"]; ?></p>
                    <span class="text-muted d-block mb-2"><?php echo $notification["date"]; ?></span>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-outline-danger delete-btn" data-notification-id="<?php echo $notification["notificationId"]; ?>">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
    <div class="text-center my-5">
        <h2 class="display-6">Nothing to show</h2>
        <p class="text-muted">You have no notifications at this moment.</p>
    </div>
    <?php endif; ?>
</section>
