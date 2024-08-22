const express = require("express");
const mysql = require("mysql2");
const cors = require("cors");
const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken");
const app = express();
const port = 3000;

// Enable CORS
app.use(cors());

// Middleware to parse JSON bodies
app.use(express.json());

// MySQL connection configuration
const connection = mysql.createConnection({
    host: "localhost", // Update with your MySQL host
    user: "root", // Update with your MySQL username
    password: "", // Update with your MySQL password
    database: "civil", // Update with your MySQL database name
});

// Connect to MySQL
connection.connect((err) => {
    if (err) {
        console.error("Error connecting to MySQL:", err.stack);
        return;
    }
    console.log("Connected to MySQL as id " + connection.threadId);
});

// Secret key for JWT
const JWT_SECRET =
    "1a6aac60c4e1a38008a6e5396c18ed460d782c885d866e0d42c309a685a831c5"; // Replace with your own secret

// User registration
app.post("/api/register", async (req, res) => {
    const { name, email, password, role } = req.body;

    if (!name || !email || !password || !role) {
        return res.status(400).json({ error: "All fields are required" });
    }

    try {
        // Hash the password
        const hashedPassword = await bcrypt.hash(password, 10);

        // Insert user into the database
        connection.query(
            "INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, ?)",
            [name, email, hashedPassword, role],
            (err, results) => {
                if (err) {
                    return res
                        .status(500)
                        .json({ error: "Error registering user" });
                }
                res.status(201).json({
                    message: "User registered successfully",
                });
            }
        );
    } catch (err) {
        res.status(500).json({ error: "Error hashing password" });
    }
});

app.post("/api/login", (req, res) => {
    const { email, password } = req.body;

    if (!email || !password) {
        return res
            .status(400)
            .json({ error: "Email and password are required" });
    }

    connection.query(
        "SELECT * FROM user WHERE email = ?",
        [email],
        async (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error fetching user" });
            }
            if (results.length === 0) {
                return res
                    .status(401)
                    .json({ error: "Invalid email or password" });
            }

            const user = results[0];
            const isMatch = await bcrypt.compare(password, user.password);
            if (!isMatch) {
                return res
                    .status(401)
                    .json({ error: "Invalid email or password" });
            }

            const token = jwt.sign(
                { id: user.id, role: user.role },
                JWT_SECRET,
                { expiresIn: "1h" }
            );

            res.json({ token, role: user.role }); // Return role along with token
        }
    );
});
app.get("/api/users", (req, res) => {
    connection.query("SELECT id, name FROM user", (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching users" });
        }
        res.json(results);
    });
});
//=================================== Client =================================================
app.post("/api/clients", (req, res) => {
    const { name, email, phone, address } = req.body;

    if (!name || !email) {
        return res.status(400).json({ error: "Name and email are required" });
    }

    connection.query(
        "INSERT INTO clients (name, email, phone, address) VALUES (?, ?, ?, ?)",
        [name, email, phone, address],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error creating client" });
            }
            res.status(201).json({
                message: "Client created successfully",
                clientId: results.insertId,
            });
        }
    );
});
app.get("/api/clients", (req, res) => {
    connection.query("SELECT * FROM clients", (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching clients" });
        }
        res.json(results);
    });
});
app.get("/api/clients/:id", (req, res) => {
    const clientId = req.params.id;

    connection.query(
        "SELECT * FROM clients WHERE id = ?",
        [clientId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error fetching client" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Client not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/clients/:id", (req, res) => {
    const clientId = req.params.id;
    const { name, email, phone, address } = req.body;

    connection.query(
        "UPDATE clients SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?",
        [name, email, phone, address, clientId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error updating client" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Client not found" });
            }
            res.json({ message: "Client updated successfully" });
        }
    );
});
app.delete("/api/clients/:id", (req, res) => {
    const clientId = req.params.id;

    connection.query(
        "DELETE FROM clients WHERE id = ?",
        [clientId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error deleting client" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Client not found" });
            }
            res.json({ message: "Client deleted successfully" });
        }
    );
});
//=================================== Projects =================================================
app.post("/api/projects", (req, res) => {
    const { client_id, name, description, start_date, end_date, status } =
        req.body;

    if (!client_id || !name) {
        return res
            .status(400)
            .json({ error: "Client ID and name are required" });
    }

    connection.query(
        "INSERT INTO projects (client_id, name, description, start_date, end_date, status) VALUES (?, ?, ?, ?, ?, ?)",
        [client_id, name, description, start_date, end_date, status],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating project" });
            }
            res.status(201).json({
                message: "Project created successfully",
                projectId: results.insertId,
            });
        }
    );
});
app.get("/api/projects", (req, res) => {
    const query = `
        SELECT projects.id, projects.name, projects.description, projects.start_date, projects.end_date, projects.status, clients.name AS client_name
        FROM projects
        JOIN clients ON projects.client_id = clients.id
    `;
    connection.query(query, (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching projects" });
        }
        res.json(results);
    });
});

app.get("/api/projects/:id", (req, res) => {
    const projectId = req.params.id;

    connection.query(
        "SELECT * FROM projects WHERE id = ?",
        [projectId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching project" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Project not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/projects/:id", (req, res) => {
    const projectId = req.params.id;
    const { client_id, name, description, start_date, end_date, status } =
        req.body;

    connection.query(
        "UPDATE projects SET client_id = ?, name = ?, description = ?, start_date = ?, end_date = ?, status = ? WHERE id = ?",
        [client_id, name, description, start_date, end_date, status, projectId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error updating project" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Project not found" });
            }
            res.json({ message: "Project updated successfully" });
        }
    );
});
app.delete("/api/projects/:id", (req, res) => {
    const projectId = req.params.id;

    connection.query(
        "DELETE FROM projects WHERE id = ?",
        [projectId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error deleting project" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Project not found" });
            }
            res.json({ message: "Project deleted successfully" });
        }
    );
});
//=================================== Employee =================================================
app.post("/api/employees", (req, res) => {
    const { name, position, salary, hire_date } = req.body;

    if (!name) {
        return res.status(400).json({ error: "Name is required" });
    }

    connection.query(
        "INSERT INTO employees (name, position, salary, hire_date) VALUES (?, ?, ?, ?)",
        [name, position, salary, hire_date],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating employee" });
            }
            res.status(201).json({
                message: "Employee created successfully",
                employeeId: results.insertId,
            });
        }
    );
});
app.get("/api/employees", (req, res) => {
    connection.query("SELECT * FROM employees", (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching employees" });
        }
        res.json(results);
    });
});
app.get("/api/employees/:id", (req, res) => {
    const employeeId = req.params.id;

    connection.query(
        "SELECT * FROM employees WHERE id = ?",
        [employeeId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching employee" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Employee not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/employees/:id", (req, res) => {
    const employeeId = req.params.id;
    const { name, position, salary, hire_date } = req.body;

    connection.query(
        "UPDATE employees SET name = ?, position = ?, salary = ?, hire_date = ? WHERE id = ?",
        [name, position, salary, hire_date, employeeId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error updating employee" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Employee not found" });
            }
            res.json({ message: "Employee updated successfully" });
        }
    );
});
app.delete("/api/employees/:id", (req, res) => {
    const employeeId = req.params.id;

    connection.query(
        "DELETE FROM employees WHERE id = ?",
        [employeeId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error deleting employee" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Employee not found" });
            }
            res.json({ message: "Employee deleted successfully" });
        }
    );
});
//=================================== Material =================================================
app.post("/api/materials", (req, res) => {
    const { name, quantity, unit_price, supplier, image } = req.body;

    if (!name) {
        return res.status(400).json({ error: "Name is required" });
    }

    connection.query(
        "INSERT INTO materials (name, quantity, unit_price, supplier, image) VALUES (?, ?, ?, ?, ?)",
        [name, quantity, unit_price, supplier, image],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating material" });
            }
            res.status(201).json({
                message: "Material created successfully",
                materialId: results.insertId,
            });
        }
    );
});
app.get("/api/materials", (req, res) => {
    connection.query("SELECT * FROM materials", (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching materials" });
        }
        res.json(results);
    });
});
app.get("/api/materials/:id", (req, res) => {
    const materialId = req.params.id;

    connection.query(
        "SELECT * FROM materials WHERE id = ?",
        [materialId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching material" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Material not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/materials/:id", (req, res) => {
    const materialId = req.params.id;
    const { name, quantity, unit_price, supplier, image } = req.body;

    connection.query(
        "UPDATE materials SET name = ?, quantity = ?, unit_price = ?, supplier = ?, image = ? WHERE id = ?",
        [name, quantity, unit_price, supplier, image, materialId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error updating material" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Material not found" });
            }
            res.json({ message: "Material updated successfully" });
        }
    );
});
app.delete("/api/materials/:id", (req, res) => {
    const materialId = req.params.id;

    connection.query(
        "DELETE FROM materials WHERE id = ?",
        [materialId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error deleting material" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Material not found" });
            }
            res.json({ message: "Material deleted successfully" });
        }
    );
});
//=================================== Tasks =================================================
// Create a new task
// Create a new task
app.post("/api/tasks", (req, res) => {
    const { project_id, description, assigned_to, status, due_date } = req.body;

    if (!project_id || !description) {
        return res
            .status(400)
            .json({ error: "Project ID and description are required" });
    }

    connection.query(
        "INSERT INTO tasks (project_id, description, assigned_to, status, due_date) VALUES (?, ?, ?, ?, ?)",
        [project_id, description, assigned_to, status, due_date],
        (err, results) => {
            if (err) {
                console.error("Database query error:", err); // Log detailed error
                return res.status(500).json({
                    error: "Error creating task",
                    details: err.message,
                });
            }
            res.status(201).json({
                message: "Task created successfully",
                taskId: results.insertId,
            });
        }
    );
});
app.get("/api/tasks", (req, res) => {
    const query = `
        SELECT 
            tasks.id, 
            projects.name AS project_name, 
            tasks.description, 
            employees.name AS assigned_to_name, 
            tasks.status, 
            tasks.due_date
        FROM 
            tasks
        JOIN 
            projects ON tasks.project_id = projects.id
        JOIN 
            employees ON tasks.assigned_to = employees.id
    `;
    connection.query(query, (err, results) => {
        if (err) {
            console.error("Database query error:", err);
            return res
                .status(500)
                .json({ error: "Error fetching tasks", details: err.message });
        }
        res.json(results);
    });
});
app.get("/api/tasks/:id", (req, res) => {
    const taskId = req.params.id;

    connection.query(
        "SELECT * FROM tasks WHERE id = ?",
        [taskId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error fetching task" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Task not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/tasks/:id", (req, res) => {
    const taskId = req.params.id;
    const { project_id, description, assigned_to, status, due_date } = req.body;

    connection.query(
        "UPDATE tasks SET project_id = ?, description = ?, assigned_to = ?, status = ?, due_date = ? WHERE id = ?",
        [project_id, description, assigned_to, status, due_date, taskId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error updating task" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Task not found" });
            }
            res.json({ message: "Task updated successfully" });
        }
    );
});
app.delete("/api/tasks/:id", (req, res) => {
    const taskId = req.params.id;

    connection.query(
        "DELETE FROM tasks WHERE id = ?",
        [taskId],
        (err, results) => {
            if (err) {
                return res.status(500).json({ error: "Error deleting task" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Task not found" });
            }
            res.json({ message: "Task deleted successfully" });
        }
    );
});
//=================================== Invoice =================================================
app.post("/api/invoices", (req, res) => {
    const { project_id, amount, issue_date, due_date, status } = req.body;

    if (!project_id || !amount) {
        return res
            .status(400)
            .json({ error: "Project ID and amount are required" });
    }

    connection.query(
        "INSERT INTO invoices (project_id, amount, issue_date, due_date, status) VALUES (?, ?, ?, ?, ?)",
        [project_id, amount, issue_date, due_date, status],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating invoice" });
            }
            res.status(201).json({
                message: "Invoice created successfully",
                invoiceId: results.insertId,
            });
        }
    );
});
app.get("/api/invoices", (req, res) => {
    const query = `
        SELECT 
            invoices.id, 
            projects.name AS project_name, 
            invoices.amount, 
            invoices.issue_date, 
            invoices.due_date, 
            invoices.status 
        FROM 
            invoices
        JOIN 
            projects ON invoices.project_id = projects.id
    `;
    connection.query(query, (err, results) => {
        if (err) {
            return res.status(500).json({ error: "Error fetching invoices" });
        }
        res.json(results);
    });
});

app.get("/api/invoices/:id", (req, res) => {
    const invoiceId = req.params.id;

    connection.query(
        "SELECT * FROM invoices WHERE id = ?",
        [invoiceId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching invoice" });
            }
            if (results.length === 0) {
                return res.status(404).json({ error: "Invoice not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/invoices/:id", (req, res) => {
    const invoiceId = req.params.id;
    const { project_id, amount, issue_date, due_date, status } = req.body;

    connection.query(
        "UPDATE invoices SET project_id = ?, amount = ?, issue_date = ?, due_date = ?, status = ? WHERE id = ?",
        [project_id, amount, issue_date, due_date, status, invoiceId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error updating invoice" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Invoice not found" });
            }
            res.json({ message: "Invoice updated successfully" });
        }
    );
});
app.delete("/api/invoices/:id", (req, res) => {
    const invoiceId = req.params.id;

    connection.query(
        "DELETE FROM invoices WHERE id = ?",
        [invoiceId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error deleting invoice" });
            }
            if (results.affectedRows === 0) {
                return res.status(404).json({ error: "Invoice not found" });
            }
            res.json({ message: "Invoice deleted successfully" });
        }
    );
});
//=================================== Notifications =================================================
app.post("/api/notifications", (req, res) => {
    const { message, notification_type } = req.body;

    if (!message) {
        return res.status(400).json({ error: "Message is required" });
    }

    connection.query(
        "INSERT INTO notifications (message, notification_type) VALUES (?, ?)",
        [message, notification_type],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating notification" });
            }
            res.status(201).json({
                message: "Notification created successfully",
                notificationId: results.insertId,
            });
        }
    );
});
app.get("/api/notifications", (req, res) => {
    connection.query("SELECT * FROM notifications", (err, results) => {
        if (err) {
            return res
                .status(500)
                .json({ error: "Error fetching notifications" });
        }
        res.json(results);
    });
});
app.get("/api/notifications/:id", (req, res) => {
    const notificationId = req.params.id;

    connection.query(
        "SELECT * FROM notifications WHERE id = ?",
        [notificationId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching notification" });
            }
            if (results.length === 0) {
                return res
                    .status(404)
                    .json({ error: "Notification not found" });
            }
            res.json(results[0]);
        }
    );
});
app.delete("/api/notifications", (req, res) => {
    connection.query("DELETE FROM notifications", (err, results) => {
        if (err) {
            return res
                .status(500)
                .json({ error: "Error deleting notifications" });
        }
        res.json({ message: "All notifications deleted successfully" });
    });
});
//=================================== Projet Request =================================================
app.post("/api/project_requests", (req, res) => {
    const { user_id, request_date, project_name, project_description, status } =
        req.body;

    if (!user_id || !request_date || !project_name) {
        return res.status(400).json({
            error: "User ID, request date, and project name are required",
        });
    }

    connection.query(
        "INSERT INTO project_requests (user_id, request_date, project_name, project_description, status) VALUES (?, ?, ?, ?, ?)",
        [user_id, request_date, project_name, project_description, status],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error creating project request" });
            }
            res.status(201).json({
                message: "Project request created successfully",
                requestId: results.insertId,
            });
        }
    );
});

app.get("/api/project_requests", (req, res) => {
    connection.query(
        "SELECT pr.*, u.name as user_name FROM project_requests pr JOIN user u ON pr.user_id = u.id",
        (err, results) => {
            if (err) {
                console.error("Error fetching project requests:", err);
                return res
                    .status(500)
                    .json({ error: "Error fetching project requests" });
            }
            res.json(results);
        }
    );
});
app.get("/api/project_requests/:id", (req, res) => {
    const requestId = req.params.id;

    connection.query(
        "SELECT * FROM project_requests WHERE id = ?",
        [requestId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error fetching project request" });
            }
            if (results.length === 0) {
                return res
                    .status(404)
                    .json({ error: "Project request not found" });
            }
            res.json(results[0]);
        }
    );
});
app.put("/api/project_requests/:id", (req, res) => {
    const requestId = req.params.id;
    const { user_id, request_date, project_name, project_description, status } =
        req.body;

    connection.query(
        "UPDATE project_requests SET user_id = ?, request_date = ?, project_name = ?, project_description = ?, status = ? WHERE id = ?",
        [
            user_id,
            request_date,
            project_name,
            project_description,
            status,
            requestId,
        ],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error updating project request" });
            }
            if (results.affectedRows === 0) {
                return res
                    .status(404)
                    .json({ error: "Project request not found" });
            }
            res.json({ message: "Project request updated successfully" });
        }
    );
});
app.delete("/api/project_requests/:id", (req, res) => {
    const requestId = req.params.id;

    connection.query(
        "DELETE FROM project_requests WHERE id = ?",
        [requestId],
        (err, results) => {
            if (err) {
                return res
                    .status(500)
                    .json({ error: "Error deleting project request" });
            }
            if (results.affectedRows === 0) {
                return res
                    .status(404)
                    .json({ error: "Project request not found" });
            }
            res.json({ message: "Project request deleted successfully" });
        }
    );
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
