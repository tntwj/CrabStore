document.addEventListener("DOMContentLoaded", () => {
    const mainContainer = document.querySelector("main");

    document.querySelector(".change-details-button").addEventListener("click", () => {
        mainContainer.insertAdjacentHTML("beforeend",
        `
        <div class="modal fade change-details-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Change Details</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form class="change-details-form" method="POST" action="handlers/update-details.php">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your new First Name" required />
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your new Last Name" required />
                            </div>
                        </div>
                        <div class="modal-footer flex-column">
                            <div class="d-flex justify-content-start w-100 error-div">
                            </div>
                            <div class="d-flex justify-content-end w-100 gap-1">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" value="Save Changes" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>`);

        const modalTag = document.querySelector(".change-details-modal");
        const modal = new bootstrap.Modal(modalTag);

        modalTag.addEventListener('hidden.bs.modal', () => {
            modalTag.remove();
        });
        modal.show();

        // Performs basic client side validation
        document.querySelector(".change-details-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const firstName = document.querySelector("#firstName").value.trim();
            const lastName = document.querySelector("#lastName").value.trim();
            const validationErrorContainer = document.querySelector(".error-div");

            function setError(message) {
                validationErrorContainer.innerHTML = `<p class="text-danger mb-3">${message}</p>`;
            }

            if (!firstName || !lastName) {
                setError("Please fill out all fields.");
                return;
            }
            const namePattern = /^[a-zA-Z]+$/;
            if (!namePattern.test(firstName) || !namePattern.test(lastName)) {
                setError("Names can only contain letters.");
                return;
            }
            if (firstName.length < 2 || lastName.length < 2) {
                setError("Names must be at least 2 characters long.");
                return;
            }
            this.submit();
        }); 
    });

    document.querySelector(".change-password-button").addEventListener("click", () => {
        mainContainer.insertAdjacentHTML("beforeend",
        `
        <div class="modal fade change-password-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Change Password</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form class="change-password-form" method="POST" action="handlers/update-password.php">
                        <div class="modal-body">
                            <div class="mb-2">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Current Password" required />
                            </div>
                            <div class="mb-2">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password" required />
                            </div>
                            <div class="mb-2">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required />
                            </div>
                        </div>
                        <div class="modal-footer flex-column">
                            <div class="d-flex justify-content-start w-100 error-div">
                            </div>
                            <div class="d-flex justify-content-end w-100 gap-1">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" value="Change Password" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>`);

        const modalTag = document.querySelector(".change-password-modal");
        const modal = new bootstrap.Modal(modalTag);

        modalTag.addEventListener('hidden.bs.modal', () => {
            modalTag.remove();
        });
        modal.show();

        // Perform basic client side validation
        document.querySelector(".change-password-form").addEventListener("submit", function(event) {
            event.preventDefault();
            const currentPassword = document.querySelector("#currentPassword").value.trim();
            const newPassword = document.querySelector("#newPassword").value.trim();
            const confirmPassword = document.querySelector("#confirmPassword").value.trim();
            const validationErrorContainer = document.querySelector(".error-div");

            function setError(message) {
                validationErrorContainer.innerHTML = `<p class="text-danger mb-3">${message}</p>`;
            }

            if (!currentPassword || !newPassword || !confirmPassword) {
                setError("All fields are required.");
                return;
            }
            if (newPassword !== confirmPassword) {
                setError("Passwords do not match.");
                return;
            }
            this.submit();
        })
    });
});
