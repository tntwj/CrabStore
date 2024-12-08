document.addEventListener("DOMContentLoaded", () => {
    const mainContainer = document.querySelector("main");

    document.getElementById("btnChangeDetails").addEventListener("click", () => {
        
        mainContainer.insertAdjacentHTML("beforeend",
        `
        <div class="modal fade" id="changeDetailsModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Change Details</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form id="changeDetailsForm" method="POST" action="handlers/update-details.php">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your First Name" required/>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your Last Name" required/>
                            </div>
                        </div>
                        <div class="modal-footer flex-column">
                            <div class="d-flex justify-content-start w-100" id="validationError">
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

        const modalElement = document.getElementById("changeDetailsModal");
        const modal = new bootstrap.Modal(modalElement);

        modalElement.addEventListener('hidden.bs.modal', () => {
            modalElement.remove();
        });

        modal.show();

        document.getElementById("changeDetailsForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const firstName = document.getElementById("firstName").value.trim();
            const lastName = document.getElementById("lastName").value.trim();
            const validationErrorContainer = document.getElementById("validationError");

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

    document.getElementById("btnChangePassword").addEventListener("click", () => {

        mainContainer.insertAdjacentHTML("beforeend",
        `
        <div class="modal fade" id="changePasswordModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Change Password</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form id="changePasswordForm" method="POST" action="handlers/update-password.php">
                        <div class="modal-body">
                            <div class="mb-2">
                                <label for="currentPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="currentPassword" placeholder="Current Password" required/>
                            </div>
                            <div class="mb-2">
                                <label for="newPassword" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPassword" placeholder="New Password"required/>
                            </div>
                            <div class="mb-2">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required/>
                            </div>
                        </div>
                        <div class="modal-footer flex-column">
                            <div class="d-flex justify-content-start w-100" id="validationError">
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

        const modalElement = document.getElementById("changePasswordModal");
        const modal = new bootstrap.Modal(modalElement);

        modalElement.addEventListener('hidden.bs.modal', () => {
            modalElement.remove();
        });

        modal.show();

        document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const currentPassword = document.querySelector("#currentPassword").value.trim();
            const newPassword = document.querySelector("#newPassword").value.trim();
            const confirmPassword = document.querySelector("#confirmPassword").value.trim();
            const validationErrorContainer = document.getElementById("validationError");

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
