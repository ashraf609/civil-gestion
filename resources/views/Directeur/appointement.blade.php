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
            <h1 class="h3 mb-0 text-gray-800">Notifications Listes</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Notifications</li>
              <li class="breadcrumb-item active" aria-current="page">Notifications Listes</li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Materials Table -->
<div class="col-lg-12 mb-4">
    <!-- Rendez-vous Table -->
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Rendez-vous</h6>
            <div>
                <button class="btn btn-sm btn-primary" onclick="openAddRendezVousModal()">Add Rendez-vous</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Client ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="rendezVousTableBody">
                    <!-- Dynamic content goes here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Rendez-vous Modal -->
<div class="modal fade" id="addRendezVousModal" tabindex="-1" role="dialog" aria-labelledby="addRendezVousModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRendezVousModalLabel">Add New Rendez-vous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addRendezVousForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="clientId">Client ID</label>
                        <input type="number" class="form-control" id="clientId" name="client_id" required>
                    </div>
                    <div class="form-group">
                        <label for="rendezVousDate">Date</label>
                        <input type="date" class="form-control" id="rendezVousDate" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="rendezVousTime">Time</label>
                        <input type="time" class="form-control" id="rendezVousTime" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="SCHEDULED">SCHEDULED</option>
                            <option value="CANCELLED">CANCELLED</option>
                            <option value="COMPLETED">COMPLETED</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Rendez-vous</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Rendez-vous Modal -->
<div class="modal fade" id="updateRendezVousModal" tabindex="-1" role="dialog" aria-labelledby="updateRendezVousModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateRendezVousModalLabel">Update Rendez-vous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateRendezVousForm">
                <input type="hidden" id="updateRendezVousId" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updateClientId">Client ID</label>
                        <input type="number" class="form-control" id="updateClientId" name="client_id" required>
                    </div>
                    <div class="form-group">
                        <label for="updateDate">Date</label>
                        <input type="date" class="form-control" id="updateDate" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="updateTime">Time</label>
                        <input type="time" class="form-control" id="updateTime" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="updateLocation">Location</label>
                        <input type="text" class="form-control" id="updateLocation" name="location">
                    </div>
                    <div class="form-group">
                        <label for="updateStatus">Status</label>
                        <select class="form-control" id="updateStatus" name="status">
                            <option value="SCHEDULED">SCHEDULED</option>
                            <option value="CANCELLED">CANCELLED</option>
                            <option value="COMPLETED">COMPLETED</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Rendez-vous</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    loadRendezVous();
});

function loadRendezVous() {
    fetch('http://localhost:3000/api/rendez_vous')
        .then(response => response.json())
        .then(rendezVous => {
            const tableBody = document.getElementById('rendezVousTableBody');
            tableBody.innerHTML = rendezVous.map(rdv => `
                <tr>
                    <td>${rdv.id}</td>
                    <td>${rdv.client_id}</td>
                    <td>${rdv.date}</td>
                    <td>${rdv.time}</td>
                    <td>${rdv.location}</td>
                    <td>${getRendezVousStatusBadge(rdv.status)}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openUpdateRendezVousModal(${rdv.id}, '${rdv.client_id}', '${rdv.date}', '${rdv.time}', '${rdv.location}', '${rdv.status}')">Update</button>
                        <button class="btn btn-sm btn-danger" onclick="confirmDeleteRendezVous(${rdv.id})">Delete</button>
                    </td>
                </tr>
            `).join('');
        })
        .catch(error => console.error('Error fetching rendez-vous:', error));
}

function getRendezVousStatusBadge(status) {
    let badgeClass;
    switch (status) {
        case 'COMPLETED':
            badgeClass = 'badge badge-success';
            break;
        case 'SCHEDULED':
            badgeClass = 'badge badge-primary';
            break;
        case 'CANCELLED':
            badgeClass = 'badge badge-danger';
            break;
        default:
            badgeClass = 'badge badge-secondary';
    }
    return `<span class="${badgeClass}">${status}</span>`;
}

function openAddRendezVousModal() {
    document.getElementById('addRendezVousForm').reset();
    $('#addRendezVousModal').modal('show');
}

function openUpdateRendezVousModal(id, clientId, date, time, location, status) {
    document.getElementById('updateRendezVousId').value = id;
    document.getElementById('updateClientId').value = clientId;
    document.getElementById('updateDate').value = date;
    document.getElementById('updateTime').value = time;
    document.getElementById('updateLocation').value = location;
    document.getElementById('updateStatus').value = status;
    $('#updateRendezVousModal').modal('show');
}

function confirmDeleteRendezVous(id) {
    if (confirm('Are you sure you want to delete this rendez-vous?')) {
        fetch(`http://localhost:3000/api/rendez_vous/${id}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Rendez-vous deleted successfully!');
                loadRendezVous();
            }
        })
        .catch(error => console.error('Error deleting rendez-vous:', error));
    }
}

document.getElementById('addRendezVousForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('http://localhost:3000/api/rendez_vous', {
        method: 'POST',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert('Error: ' + data.error);
        } else {
            alert('Rendez-vous added successfully!');
            $('#addRendezVousModal').modal('hide');
            loadRendezVous();
        }
    })
    .catch(error => console.error('Error adding rendez-vous:', error));
});

document.getElementById('updateRendezVousForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const id = document.getElementById('updateRendezVousId').value;
    const formData = new FormData(this);

    fetch(`http://localhost:3000/api/rendez_vous/${id}`, {
        method: 'PUT',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert('Error: ' + data.error);
        } else {
            alert('Rendez-vous updated successfully!');
            $('#updateRendezVousModal').modal('hide');
            loadRendezVous();
        }
    })
    .catch(error => console.error('Error updating rendez-vous:', error));
});
</script>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>