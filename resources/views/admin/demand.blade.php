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
            <h1 class="h3 mb-0 text-gray-800">Requests Listes</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Requests</li>
              <li class="breadcrumb-item active" aria-current="page">Requests Listes</li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Materials Table -->
<div class="col-lg-12 mb-4">
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Project Requests</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addProjectRequestModal">Add Material</button>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Request Date</th>
                        <th>Project Name</th>
                        <th>Project Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="projectRequestsTableBody"></tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- Add Project Request Modal -->
<div class="modal fade" id="addProjectRequestModal" tabindex="-1" aria-labelledby="addProjectRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addProjectRequestForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectRequestModalLabel">Add Project Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userId">User</label>
                        <select id="userId" name="user_id" class="form-control" required></select>
                    </div>
                    <div class="form-group">
                        <label for="requestDate">Request Date</label>
                        <input type="date" class="form-control" id="requestDate" name="request_date" required>
                    </div>
                    <div class="form-group">
                        <label for="projectName">Project Name</label>
                        <input type="text" class="form-control" id="projectName" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="projectDescription">Project Description</label>
                        <textarea class="form-control" id="projectDescription" name="project_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Request</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Update Project Request Modal -->
<div class="modal fade" id="updateProjectRequestModal" tabindex="-1" aria-labelledby="updateProjectRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="updateProjectRequestForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProjectRequestModalLabel">Update Project Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="updateRequestId" name="id">
                    <div class="form-group">
                        <label for="updateUserId">User</label>
                        <select id="updateUserId" name="user_id" class="form-control" required></select>
                    </div>
                    <div class="form-group">
                        <label for="updateRequestDate">Request Date</label>
                        <input type="date" class="form-control" id="updateRequestDate" name="request_date" required>
                    </div>
                    <div class="form-group">
                        <label for="updateProjectName">Project Name</label>
                        <input type="text" class="form-control" id="updateProjectName" name="project_name" required>
                    </div>
                    <div class="form-group">
                        <label for="updateProjectDescription">Project Description</label>
                        <textarea class="form-control" id="updateProjectDescription" name="project_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="updateStatus">Status</label>
                        <select id="updateStatus" name="status" class="form-control" required>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Request</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Project Request Modal -->
<div class="modal fade" id="deleteProjectRequestModal" tabindex="-1" aria-labelledby="deleteProjectRequestModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProjectRequestModalLabel">Delete Project Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this project request?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" id="confirmDelete" class="btn btn-danger">Delete</button>
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
        loadProjectRequests();
        loadUserOptions();
    });

    function loadProjectRequests() {
        fetch('http://localhost:3000/api/project_requests')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.getElementById('projectRequestsTableBody');
                tableBody.innerHTML = '';
                data.forEach(request => {
                    tableBody.innerHTML += `
                        <tr>
                            <td>${request.id}</td>
                            <td>${request.user_name}</td>
                            <td>${request.request_date}</td>
                            <td>${request.project_name}</td>
                            <td>${request.project_description}</td>
                            <td>${getStatusBadge(request.status)}</td>
                            <td>
                                <button class="btn btn-sm btn-warning" onclick="openUpdateProjectRequestModal(${request.id}, '${request.user_id}', '${request.request_date}', '${request.project_name}', '${request.project_description}', '${request.status}')">Update</button>
                                <button class="btn btn-sm btn-danger" onclick="openDeleteProjectRequestModal(${request.id})">Delete</button>
                            </td>
                        </tr>`;
                });
            })
            .catch(error => console.error('Error:', error));
    }

    function loadUserOptions() {
        fetch('http://localhost:3000/api/users') // Adjust endpoint if necessary
            .then(response => response.json())
            .then(users => {
                const userIdSelect = document.querySelectorAll('#userId, #updateUserId');
                userIdSelect.forEach(select => {
                    select.innerHTML = '';
                    users.forEach(user => {
                        select.innerHTML += `<option value="${user.id}">${user.name}</option>`;
                    });
                });
            })
            .catch(error => console.error('Error:', error));
    }

    function getStatusBadge(status) {
        let badgeClass = '';
        switch (status) {
            case 'Pending':
                badgeClass = 'badge-warning';
                break;
            case 'Approved':
                badgeClass = 'badge-success';
                break;
            case 'Rejected':
                badgeClass = 'badge-danger';
                break;
        }
        return `<span class="badge ${badgeClass}">${status}</span>`;
    }

    document.getElementById('addProjectRequestForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('http://localhost:3000/api/project_requests', {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Project request added successfully!');
                $('#addProjectRequestModal').modal('hide');
                loadProjectRequests();
            }
        })
        .catch(error => console.error('Error:', error));
    });

    function openUpdateProjectRequestModal(id, userId, requestDate, projectName, projectDescription, status) {
        document.getElementById('updateRequestId').value = id;
        document.getElementById('updateUserId').value = userId;
        document.getElementById('updateRequestDate').value = requestDate;
        document.getElementById('updateProjectName').value = projectName;
        document.getElementById('updateProjectDescription').value = projectDescription;
        document.getElementById('updateStatus').value = status;

        $('#updateProjectRequestModal').modal('show');
    }

    document.getElementById('updateProjectRequestForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        const id = document.getElementById('updateRequestId').value;

        fetch(`http://localhost:3000/api/project_requests/${id}`, {
            method: 'PUT',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Project request updated successfully!');
                $('#updateProjectRequestModal').modal('hide');
                loadProjectRequests();
            }
        })
        .catch(error => console.error('Error:', error));
    });

    function openDeleteProjectRequestModal(id) {
        document.getElementById('confirmDelete').onclick = function() {
            fetch(`http://localhost:3000/api/project_requests/${id}`, {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                } else {
                    alert('Project request deleted successfully!');
                    $('#deleteProjectRequestModal').modal('hide');
                    loadProjectRequests();
                }
            })
            .catch(error => console.error('Error:', error));
        };
        $('#deleteProjectRequestModal').modal('show');
    }

    function openDeleteAllProjectRequestsModal() {
        document.getElementById('confirmDeleteAll').onclick = function() {
            fetch('http://localhost:3000/api/project_requests', {
                method: 'DELETE'
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert('Error: ' + data.error);
                } else {
                    alert('All project requests deleted successfully!');
                    $('#deleteAllProjectRequestsModal').modal('hide');
                    loadProjectRequests();
                }
            })
            .catch(error => console.error('Error:', error));
        };
        $('#deleteAllProjectRequestsModal').modal('show');
    }
</script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>