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
    <style>
        .badge-warning {
  background-color: #ffc107; /* Yellow for In Progress */
}

.badge-success {
  background-color: #28a745; /* Green for Completed */
}

.badge-danger {
  background-color: #dc3545; /* Red for Incompleted */
}

.badge-secondary {
  background-color: #6c757d; /* Grey for unknown status */
}

    </style>
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
        <a class="nav-link" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
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
            <a class="collapse-item" href="/client">Clients</a>
            <a class="collapse-item" href="/employeur">Employees</a>
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
            <a class="collapse-item" href="/projet">Projets</a>
            <a class="collapse-item" href="/demande_de_projet">Demandes des Projets</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/facture">
          <i class="fas fa-file-invoice"></i>
          <span>Factures</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="/tache">
         <i class="fa fa-tasks"></i>
          <span>Tâches</span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="/matriel">
          <i class="fa fa-industry"></i>
          <span>Materiels</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Notifications
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/notifications">
          <i class="fa fa-bell"></i>
          <span>Notifications</span>
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
                <span class="ml-2 d-none d-lg-inline text-white small">Nasma EL OUARDI</span>
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
            <h1 class="h3 mb-0 text-gray-800">Projets Listes</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Projets</li>
              <li class="breadcrumb-item active" aria-current="page">Projets Listes</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Project List</h6>
      <button class="btn btn-primary" data-toggle="modal" data-target="#addProjectModal">Add Project</button>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Client Name</th>
            <th>Project Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="projectTableBody">
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Project Modal -->
<div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProjectModalLabel">Add New Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addProjectForm">
          <div class="form-group">
            <label for="projectClient">Client</label>
            <select class="form-control" id="projectClient" name="client_id" required>
              <!-- Client options will be populated here -->
            </select>
          </div>
          <div class="form-group">
            <label for="projectName">Project Name</label>
            <input type="text" class="form-control" id="projectName" name="name" required>
          </div>
          <div class="form-group">
            <label for="projectDescription">Description</label>
            <input type="text" class="form-control" id="projectDescription" name="description">
          </div>
          <div class="form-group">
            <label for="projectStartDate">Start Date</label>
            <input type="date" class="form-control" id="projectStartDate" name="start_date">
          </div>
          <div class="form-group">
            <label for="projectEndDate">End Date</label>
            <input type="date" class="form-control" id="projectEndDate" name="end_date">
          </div>
         <div class="form-group">
  <label for="projectStatus">Status</label>
  <select class="form-control" id="projectStatus" name="status" required>
    <option value="In Progress">In Progress</option>
    <option value="Completed">Completed</option>
    <option value="Incompleted">Incompleted</option>
  </select>
</div>
          <button type="submit" class="btn btn-primary">Add Project</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Project Modal -->
<div class="modal fade" id="updateProjectModal" tabindex="-1" role="dialog" aria-labelledby="updateProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateProjectModalLabel">Update Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateProjectForm">
          <input type="hidden" id="updateProjectId" name="id">
          <div class="form-group">
            <label for="updateProjectClient">Client</label>
            <select class="form-control" id="updateProjectClient" name="client_id" required>
              <!-- Client options will be populated here -->
            </select>
          </div>
          <div class="form-group">
            <label for="updateProjectName">Project Name</label>
            <input type="text" class="form-control" id="updateProjectName" name="name" required>
          </div>
          <div class="form-group">
            <label for="updateProjectDescription">Description</label>
            <input type="text" class="form-control" id="updateProjectDescription" name="description">
          </div>
          <div class="form-group">
            <label for="updateProjectStartDate">Start Date</label>
            <input type="date" class="form-control" id="updateProjectStartDate" name="start_date">
          </div>
          <div class="form-group">
            <label for="updateProjectEndDate">End Date</label>
            <input type="date" class="form-control" id="updateProjectEndDate" name="end_date">
          </div>
         <div class="form-group">
  <label for="updateProjectStatus">Status</label>
  <select class="form-control" id="updateProjectStatus" name="status" required>
    <option value="In Progress">In Progress</option>
    <option value="Completed">Completed</option>
    <option value="Incompleted">Incompleted</option>
  </select>
</div>
          <button type="submit" class="btn btn-primary">Update Project</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Project Modal -->
<div class="modal fade" id="deleteProjectModal" tabindex="-1" role="dialog" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteProjectModalLabel">Delete Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this project?</p>
        <form id="deleteProjectForm">
          <input type="hidden" id="deleteProjectId" name="id">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addClientModalLabel">Add New Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addClientForm">
          <div class="form-group">
            <label for="clientName">Name</label>
            <input type="text" class="form-control" id="clientName" name="name" required>
          </div>
          <div class="form-group">
            <label for="clientEmail">Email</label>
            <input type="email" class="form-control" id="clientEmail" name="email" required>
          </div>
          <div class="form-group">
            <label for="clientPhone">Phone</label>
            <input type="text" class="form-control" id="clientPhone" name="phone">
          </div>
          <div class="form-group">
            <label for="clientAddress">Address</label>
            <input type="text" class="form-control" id="clientAddress" name="address">
          </div>
          <button type="submit" class="btn btn-primary">Add Client</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Client Modal -->
<div class="modal fade" id="updateClientModal" tabindex="-1" role="dialog" aria-labelledby="updateClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateClientModalLabel">Update Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateClientForm">
          <input type="hidden" id="updateClientId" name="id">
          <div class="form-group">
            <label for="updateClientName">Name</label>
            <input type="text" class="form-control" id="updateClientName" name="name" required>
          </div>
          <div class="form-group">
            <label for="updateClientEmail">Email</label>
            <input type="email" class="form-control" id="updateClientEmail" name="email" required>
          </div>
          <div class="form-group">
            <label for="updateClientPhone">Phone</label>
            <input type="text" class="form-control" id="updateClientPhone" name="phone">
          </div>
          <div class="form-group">
            <label for="updateClientAddress">Address</label>
            <input type="text" class="form-control" id="updateClientAddress" name="address">
          </div>
          <button type="submit" class="btn btn-primary">Update Client</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Client Modal -->
<div class="modal fade" id="deleteClientModal" tabindex="-1" role="dialog" aria-labelledby="deleteClientModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteClientModalLabel">Delete Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this client?</p>
        <form id="deleteClientForm">
          <input type="hidden" id="deleteClientId" name="id">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
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
                  <a href="login.html" class="btn btn-primary">Logout</a>
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
  function getStatusBadgeClass(status) {
  switch (status) {
    case 'In Progress':
      return 'warning'; // Yellow for "In Progress"
    case 'Completed':
      return 'success'; // Green for "Completed"
    case 'Incompleted':
      return 'danger'; // Red for "Incompleted"
    default:
      return 'secondary'; // Grey for unknown status
  }
}


    function loadProjects() {
      fetch('http://localhost:3000/api/projects')
        .then(response => response.json())
        .then(projects => {
          const tableBody = document.getElementById('projectTableBody');
          tableBody.innerHTML = '';
          projects.forEach(project => {
            const row = `
              <tr>
  <td>${project.id}</td>
  <td>${project.client_name}</td>
  <td>${project.name}</td>
  <td>${project.description}</td>
  <td>${project.start_date}</td>
  <td>${project.end_date}</td>
  <td>
    <span class="badge badge-${getStatusBadgeClass(project.status)}">
      ${project.status}
    </span>
  </td>
  <td>
    <button class="btn btn-sm btn-warning" onclick="openUpdateProjectModal(${project.id}, '${project.client_id}', '${project.name}', '${project.description}', '${project.start_date}', '${project.end_date}', '${project.status}')">Update</button>
    <button class="btn btn-sm btn-danger" onclick="openDeleteProjectModal(${project.id})">Delete</button>
  </td>
</tr>

            `;
            tableBody.innerHTML += row;
          });
        });
    }

    function loadClients() {
      fetch('http://localhost:3000/api/clients')
        .then(response => response.json())
        .then(clients => {
          const clientSelects = [document.getElementById('projectClient'), document.getElementById('updateProjectClient')];
          clientSelects.forEach(select => {
            select.innerHTML = '';
            clients.forEach(client => select.innerHTML += `<option value="${client.id}">${client.name}</option>`);
          });
        });
    }

    loadProjects();
    loadClients();
     document.getElementById('addProjectForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const formData = new FormData(this);
      fetch('http://localhost:3000/api/projects', {
        method: 'POST',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: { 'Content-Type': 'application/json' }
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          alert('Error: ' + data.error);
        } else {
          alert('Project added successfully!');
          window.location.reload();
        }
      })
      .catch(error => console.error('Error:', error));
    });

    document.getElementById('updateProjectForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const formData = new FormData(this);
      fetch(`http://localhost:3000/api/projects/${document.getElementById('updateProjectId').value}`, {
        method: 'PUT',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: { 'Content-Type': 'application/json' }
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          alert('Error: ' + data.error);
        } else {
          alert('Project updated successfully!');
          window.location.reload();
        }
      })
      .catch(error => console.error('Error:', error));
    });

    document.getElementById('deleteProjectForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const projectId = document.getElementById('deleteProjectId').value;
      fetch(`http://localhost:3000/api/projects/${projectId}`, {
        method: 'DELETE'
      })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          alert('Error: ' + data.error);
        } else {
          alert('Project deleted successfully!');
          window.location.reload();
        }
      })
      .catch(error => console.error('Error:', error));
    });
  });

  function openUpdateProjectModal(id, clientId, name, description, startDate, endDate, status) {
    document.getElementById('updateProjectId').value = id;
    document.getElementById('updateProjectClient').value = clientId;
    document.getElementById('updateProjectName').value = name;
    document.getElementById('updateProjectDescription').value = description;
    document.getElementById('updateProjectStartDate').value = startDate;
    document.getElementById('updateProjectEndDate').value = endDate;
    document.getElementById('updateProjectStatus').value = status;
    $('#updateProjectModal').modal('show');
  }

  function openDeleteProjectModal(id) {
    document.getElementById('deleteProjectId').value = id;
    $('#deleteProjectModal').modal('show');
  }
</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>