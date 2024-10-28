<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Simple Tables</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
   <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
        </div>
        <div class="sidebar-brand-text mx-3">Civil Entreprise</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard-directeur">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard , Bienvenue Directeur</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Options
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-user"></i>
          <span>Utilisateurs</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilisateurs</h6>
            <a class="collapse-item" href="/client-directeur">Clients</a>
            <a class="collapse-item" href="/employeur-directeur">Employees</a>
            <a class="collapse-item" href="/users">Admin</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Projets & Demandes</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Projets et Demandes</h6>
            <a class="collapse-item" href="/projet-directeur">Projets</a>
            <a class="collapse-item" href="/demande_de_projet-directeur">Demandes des Projets</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/facture-directeur">
          <i class="fas fa-file-invoice"></i>
          <span>Factures</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/tache-directeur">
         <i class="fa fa-tasks"></i>
          <span>Tâches</span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/matriel-directeur">
          <i class="fa fa-industry"></i>
          <span>Materiels</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Notifications
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/notifications-directeur">
          <i class="fa fa-bell"></i>
          <span>Notifications</span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/appointement-directeur">
          <i class="fa fa-bell"></i>
          <span>Rendez-vous</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-back"></i>
          <span>Deconnexion</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqzimYL8cryUexi41Y0o2AIXlbtmOvOB4bgA&s" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Nasma OUARDI</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Listes des Taches</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Taches</li>
              <li class="breadcrumb-item active" aria-current="page">Liste des Taches</li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Materials Table -->
<!-- Tasks Table -->
<div class="col-lg-12 mb-4">
  <!-- Simple Tables -->
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Tasks Table</h6>
      <button class="btn btn-primary" data-toggle="modal" data-target="#addTaskModal">Add Task</button>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Project</th>
            <th>Description</th>
            <th>Assigned To</th>
            <th>Status</th>
            <th>Due Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="taskTableBody">
          <!-- Task rows will be inserted here by JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>

<!-- Add Task Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTaskModalLabel">Add New Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addTaskForm">
          <div class="form-group">
            <label for="project_id">Project</label>
            <select class="form-control" id="project_id" name="project_id" required></select>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
          </div>
          <div class="form-group">
            <label for="assigned_to">Assigned To</label>
            <select class="form-control" id="assigned_to" name="assigned_to" required></select>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
              <option value="Not Started">Not Started</option>
              <option value="In Progress">In Progress</option>
              <option value="Completed">Completed</option>
            </select>
          </div>
          <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" required>
          </div>
          <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Update Task Modal -->
<div class="modal fade" id="updateTaskModal" tabindex="-1" role="dialog" aria-labelledby="updateTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateTaskModalLabel">Update Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateTaskForm">
          <input type="hidden" id="updateTaskId" name="id">
          <div class="form-group">
            <label for="updateTaskProject">Project</label>
            <select class="form-control" id="updateTaskProject" name="project_id">
              <!-- Options will be filled by JavaScript -->
            </select>
          </div>
          <div class="form-group">
            <label for="updateTaskDescription">Description</label>
            <input type="text" class="form-control" id="updateTaskDescription" name="description" required>
          </div>
          <div class="form-group">
            <label for="updateTaskAssignedTo">Assigned To</label>
            <input type="text" class="form-control" id="updateTaskAssignedTo" name="assigned_to">
          </div>
          <div class="form-group">
            <label for="updateTaskStatus">Status</label>
            <select class="form-control" id="updateTaskStatus" name="status">
              <option value="Not Started">Not Started</option>
              <option value="In Progress">In Progress</option>
              <option value="Completed">Completed</option>
            </select>
          </div>
          <div class="form-group">
            <label for="updateTaskDueDate">Due Date</label>
            <input type="date" class="form-control" id="updateTaskDueDate" name="due_date">
          </div>
          <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Delete Task Modal -->
<div class="modal fade" id="deleteTaskModal" tabindex="-1" role="dialog" aria-labelledby="deleteTaskModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteTaskModalLabel">Delete Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this task?</p>
        <form id="deleteTaskForm">
          <input type="hidden" id="deleteTaskId" name="id">
          <button type="submit" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>



    </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="/" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script>
 document.addEventListener('DOMContentLoaded', function() {
  loadTasks();
  loadProjects();

  document.getElementById('updateTaskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch(`http://localhost:3000/api/tasks/${document.getElementById('updateTaskId').value}`, {
      method: 'PUT',
      body: JSON.stringify(Object.fromEntries(formData)),
      headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Task updated successfully!');
        $('#updateTaskModal').modal('hide');
        loadTasks();
      }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('deleteTaskForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const taskId = document.getElementById('deleteTaskId').value;
    fetch(`http://localhost:3000/api/tasks/${taskId}`, {
      method: 'DELETE'
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert('Error: ' + data.error);
      } else {
        alert('Task deleted successfully!');
        $('#deleteTaskModal').modal('hide');
        loadTasks();
      }
    })
    .catch(error => console.error('Error:', error));
  });
});

function loadTasks() {
  fetch('http://localhost:3000/api/tasks')
    .then(response => response.json())
    .then(tasks => {
      const tableBody = document.getElementById('taskTableBody');
      tableBody.innerHTML = '';
      tasks.forEach(task => {
        tableBody.innerHTML += `
          <tr>
            <td>${task.id}</td>
            <td>${task.project_name}</td>
            <td>${task.description}</td>
            <td>${task.assigned_to}</td>
            <td>${task.status}</td>
            <td>${task.due_date}</td>
            <td>
              <button class="btn btn-sm btn-warning" onclick="openUpdateTaskModal(${task.id}, '${task.project_id}', '${task.description}', '${task.assigned_to}', '${task.status}', '${task.due_date}')">Update</button>
              <button class="btn btn-sm btn-danger" onclick="openDeleteTaskModal(${task.id})">Delete</button>
            </td>
          </tr>
        `;
      });
    })
    .catch(error => console.error('Error:', error));
}

function loadProjects() {
  fetch('http://localhost:3000/api/projects')
    .then(response => response.json())
    .then(projects => {
      const addProjectSelect = document.getElementById('taskProject');
      const updateProjectSelect = document.getElementById('updateTaskProject');
      addProjectSelect.innerHTML = '';
      updateProjectSelect.innerHTML = '';
      projects.forEach(project => {
        addProjectSelect.innerHTML += `<option value="${project.id}">${project.name}</option>`;
        updateProjectSelect.innerHTML += `<option value="${project.id}">${project.name}</option>`;
      });
    })
    .catch(error => console.error('Error:', error));
}

function openUpdateTaskModal(id, project_id, description, assigned_to, status, due_date) {
  document.getElementById('updateTaskId').value = id;
  document.getElementById('updateTaskProject').value = project_id;
  document.getElementById('updateTaskDescription').value = description;
  document.getElementById('updateTaskAssignedTo').value = assigned_to;
  document.getElementById('updateTaskStatus').value = status;
  document.getElementById('updateTaskDueDate').value = due_date;
  $('#updateTaskModal').modal('show');
}

function openDeleteTaskModal(id) {
  document.getElementById('deleteTaskId').value = id;
  $('#deleteTaskModal').modal('show');
}

</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Load project and employee options
    fetchProjects();
    fetchEmployees();

    // Handle form submission
    document.getElementById('addTaskForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const formData = new FormData(this);
      const data = Object.fromEntries(formData);

      fetch('http://localhost:3000/api/tasks', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: { 'Content-Type': 'application/json' }
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          alert('Error: ' + data.error);
        } else {
          alert('Task added successfully!');
          $('#addTaskModal').modal('hide');
          loadTasks(); // Function to refresh the task list if needed
        }
      })
      .catch(error => console.error('Error:', error));
    });

    function fetchProjects() {
      fetch('http://localhost:3000/api/projects')
        .then(response => response.json())
        .then(projects => {
          const projectSelect = document.getElementById('project_id');
          projectSelect.innerHTML = projects.map(project => 
            `<option value="${project.id}">${project.name}</option>`
          ).join('');
        })
        .catch(error => console.error('Error fetching projects:', error));
    }

    function fetchEmployees() {
      fetch('http://localhost:3000/api/employees')
        .then(response => response.json())
        .then(employees => {
          const employeeSelect = document.getElementById('assigned_to');
          employeeSelect.innerHTML = employees.map(employee => 
            `<option value="${employee.id}">${employee.name}</option>`
          ).join('');
        })
        .catch(error => console.error('Error fetching employees:', error));
    }
  });
</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>