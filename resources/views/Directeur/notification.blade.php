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
    <!-- Files Table -->
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Files Project</h6>
            <div>
                <button class="btn btn-sm btn-primary" onclick="openAddFileModal()">Add File</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>File Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="fileTableBody">
                    <!-- Dynamic content goes here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add File Modal -->
<div class="modal fade" id="addFileModal" tabindex="-1" role="dialog" aria-labelledby="addFileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFileModalLabel">Add New File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addFileForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fileName">File Name</label>
                        <input type="text" class="form-control" id="fileName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="fileContent">File (PDF, Word, etc.)</label>
                        <input type="file" class="form-control" id="fileContent" name="file" required>
                    </div>
                    <div class="form-group">
                        <label for="fileType">File Type</label>
                        <select class="form-control" id="fileType" name="file_type" required>
                            <option value="PDF">PDF</option>
                            <option value="Word">Word</option>
                            <option value="Excel">Excel</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fileStatus">Status</label>
                        <select class="form-control" id="fileStatus" name="status">
                            <option value="IN PROGRESS">IN PROGRESS</option>
                            <option value="SIGNED">SIGNED</option>
                            <option value="REJECTED">REJECTED</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add File</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Update File Modal -->
<div class="modal fade" id="updateFileModal" tabindex="-1" role="dialog" aria-labelledby="updateFileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateFileModalLabel">Update File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateFileForm">
                <input type="hidden" id="updateFileId" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updateFileName">File Name</label>
                        <input type="text" class="form-control" id="updateFileName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="updateFileType">File Type</label>
                        <select class="form-control" id="updateFileType" name="file_type" required>
                            <option value="PDF">PDF</option>
                            <option value="Word">Word</option>
                            <option value="Excel">Excel</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updateFileStatus">Status</label>
                        <select class="form-control" id="updateFileStatus" name="status">
                            <option value="IN PROGRESS">IN PROGRESS</option>
                            <option value="SIGNED">SIGNED</option>
                            <option value="REJECTED">REJECTED</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updateFileContent">File (optional)</label>
                        <input type="file" class="form-control" id="updateFileContent" name="file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update File</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Delete All Files Modal -->
<div class="modal fade" id="deleteAllFilesModal" tabindex="-1" role="dialog" aria-labelledby="deleteAllFilesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAllFilesModalLabel">Delete All Files</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete all files?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="deleteAllFiles()">Delete All</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    loadFiles();
});

function loadFiles() {
    fetch('http://localhost:3000/api/files_project')
        .then(response => response.json())
        .then(files => {
            const tableBody = document.getElementById('fileTableBody');
            tableBody.innerHTML = files.map(file => `
                <tr>
                    <td>${file.id}</td>
                    <td>${file.name}</td>
                    <td>${file.file_type}</td>
                    <td>${getFileStatusBadge(file.status)}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openUpdateFileModal(${file.id}, '${file.name}', '${file.file_type}', '${file.status}')">Update</button>
                        <button class="btn btn-sm btn-danger" onclick="confirmDeleteFile(${file.id})">Delete</button>
                        <a href="http://localhost:3000/api/files_project/${file.id}/download" class="btn btn-sm btn-info" target="_blank">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </td>
                </tr>
            `).join('');
        })
        .catch(error => console.error('Error fetching files:', error));
}

// Badge styling based on status
function getFileStatusBadge(status) {
    let badgeClass;
    switch (status) {
        case 'SIGNED':
            badgeClass = 'badge badge-success';
            break;
        case 'IN PROGRESS':
            badgeClass = 'badge badge-warning';
            break;
        case 'REJECTED':
            badgeClass = 'badge badge-danger';
            break;
        default:
            badgeClass = 'badge badge-secondary';
    }
    return `<span class="${badgeClass}">${status}</span>`;
}

// Delete a single file by ID
function confirmDeleteFile(id) {
    if (confirm('Are you sure you want to delete this file?')) {
        fetch(`http://localhost:3000/api/files_project/${id}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('File deleted successfully!');
                loadFiles(); // Reload the list after deletion
            }
        })
        .catch(error => console.error('Error deleting file:', error));
    }
}

// Delete all files
function deleteAllFiles() {
    fetch('http://localhost:3000/api/files_project', {
        method: 'DELETE'
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert('Error: ' + data.error);
        } else {
            alert('All files deleted successfully!');
            $('#deleteAllFilesModal').modal('hide');
            loadFiles();
        }
    })
    .catch(error => console.error('Error deleting all files:', error));
}

// Open Update Modal
function openUpdateFileModal(id, name, fileType, status) {
    document.getElementById('updateFileId').value = id;
    document.getElementById('updateFileName').value = name;
    document.getElementById('updateFileType').value = fileType;
    document.getElementById('updateFileStatus').value = status;
    $('#updateFileModal').modal('show');
}

// Update File
document.getElementById('updateFileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const id = document.getElementById('updateFileId').value;
    const formData = new FormData(this);

    fetch(`http://localhost:3000/api/files_project/${id}`, {
        method: 'PUT',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert('Error: ' + data.error);
        } else {
            alert('File updated successfully!');
            $('#updateFileModal').modal('hide');
            loadFiles();
        }
    })
    .catch(error => console.error('Error updating file:', error));
});
</script>



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>