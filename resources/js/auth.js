document
    .getElementById("registerForm")
    .addEventListener("submit", async (event) => {
        event.preventDefault(); // Prevent the default form submission

        // Get form data
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        // Create the data object to send
        const data = {
            name: name,
            email: email,
            password: password,
            role: "user", // Set role as 'user', or modify as needed
        };

        try {
            // Send data to the server
            const response = await fetch("http://localhost:3000/api/register", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });

            // Handle the response
            if (response.ok) {
                const result = await response.json();
                alert("Registration successful!");
                // Optionally, redirect or clear the form
                document.getElementById("registerForm").reset();
            } else {
                const error = await response.json();
                alert(`Registration failed: ${error.error}`);
            }
        } catch (err) {
            console.error("Error:", err);
            alert("An error occurred. Please try again.");
        }
    });
