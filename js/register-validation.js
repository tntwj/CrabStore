document.addEventListener("DOMContentLoaded", () => {
    const formTag = document.querySelector("form[action='register-handler.php']");
    const errorDivTag = formTag.querySelector("div.error-div");
    formTag.addEventListener("submit", (event) => {
        event.preventDefault();
        const firstName = formTag.querySelector("input[name='firstName']").value.trim();
        const lastName = formTag.querySelector("input[name='lastName']").value.trim();
        const email = formTag.querySelector("input[name='email']").value.trim();
        const password = formTag.querySelector("input[name='password']").value.trim();
        const confirmPassword = formTag.querySelector("input[name='confirmPassword']").value.trim();

        function setError(message) {
            errorDivTag.innerHTML = `<p class='text-danger mb-3'>${message}</p>`;
        }

        if (!firstName || !lastName || !email || !password || !confirmPassword) {
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

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            setError("Invalid email format.");
            return;
        }

        if (password !== confirmPassword) {
            setError("Passwords do not match.");
            return;
        }

        formTag.submit();
    })
})
