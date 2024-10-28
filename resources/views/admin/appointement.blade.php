<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Appointment Lists</title>
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
        <div class="sidebar-brand-icon"></div>
        <div class="sidebar-brand-text mx-3">Civil Enterprise</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Options</div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
          <i class="far fa-user"></i>
          <span>Utilisateurs</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilisateurs</h6>
            <a class="collapse-item" href="/client">Clients</a>
            <a class="collapse-item" href="/employeur">Employees</a>
            <a class="collapse-item" href="/users">Admin</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/appointments">
          <i class="fas fa-calendar-alt"></i>
          <span>Rendez-vous</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Notifications</div>
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
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <h1 class="h3 mb-0 text-gray-800">Liste des Rendez-vous</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Rendez-vous</li>
              <li class="breadcrumb-item active" aria-current="page">Liste des Rendez-vous</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Liste des Rendez-vous</h6>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#addAppointmentModal">Ajouter Rendez-vous</button>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Client Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Reason</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="appointmentTableBody">
                      <!-- Appointments will be populated here -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- Add Appointment Modal -->
            <div class="modal fade" id="addAppointmentModal" tabindex="-1" role="dialog" aria-labelledby="addAppointmentModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addAppointmentModalLabel">Ajouter un Nouveau Rendez-vous</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form id="addAppointmentForm">
                      <div class="form-group">
                        <label for="appointmentClient">Client</label>
                        <select class="form-control" id="appointmentClient" name="client_id" required>
                          <!-- Client options will be populated here -->
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="appointmentDate">Date</label>
                        <input type="date" class="form-control" id="appointmentDate" name="date" required>
                      </div>
                      <div class="form-group">
                        <label for="appointmentTime">Time</label>
                        <input type="time" class="form-control" id="appointmentTime" name="time" required>
                      </div>
                      <div class="form-group">
                        <label for="appointmentDescription">Description</label>
                        <textarea class="form-control" id="appointmentDescription" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="appointmentStatus">Status</label>
                        <select class="form-control" id="appointmentStatus" name="status">
                          <option value="completed">Completed</option>
                          <option value="in-progress">In Progress</option>
                          <option value="incompleted">Incompleted</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Ajouter Rendez-vous</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <p>© Civil Enterprise - All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script>
    function loadClients() {
      fetch('http://localhost:3000/api/clients')
        .then(response => response.json())
        .then(clients => {
          const clientSelects = [document.getElementById('appointmentClient'), document.getElementById('updateProjectClient')];
          clientSelects.forEach(select => {
            select.innerHTML = '';
            clients.forEach(client => select.innerHTML += `<option value="${client.id}">${client.name}</option>`);
          });
        });
    }
    loadClients();
    $(document).ready(function () {
      // Function to fetch appointments
      function fetchAppointments() {
        $.ajax({
          url: 'http://localhost:3000/api/appointments', // Change this to your actual API endpoint
          method: 'GET',
          success: function (data) {
            let appointments = '';
            data.forEach(function (appointment) {
                console.log(data);
                
              appointments += `
                <tr>
                  <td>${appointment.id}</td>
                  <td>${appointment.clientName}</td>
                  <td>${appointment.date}</td>
                  <td>${appointment.time}</td>
                  <td>${appointment.status}</td>
                  <td>${appointment.reason}</td>
                  <td>${appointment.description}</td>
                  <td><span class="badge badge-${getStatusClass(appointment.status)}">${appointment.status}</span></td>
                  <td>
                    <button class="btn btn-warning btn-sm" onclick="editAppointment(${appointment.id})">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteAppointment(${appointment.id})">Delete</button>
                  </td>
                </tr>`;
            });
           
            
            $('#appointmentTableBody').html(appointments);
          }
        });
      }

      // Function to determine the status badge class
      function getStatusClass(status) {
        switch (status) {
          case 'completed':
            return 'success';
          case 'in-progress':
            return 'warning';
          case 'incompleted':
            return 'danger';
          default:
            return 'secondary';
        }
      }

      // Fetch appointments on page load
      fetchAppointments();

      // Handle form submission to add appointment
$('#addAppointmentForm').on('submit', function (e) {
    e.preventDefault();

    const clientId = $('#appointmentClient').val();
    const appointmentDate = $('#appointmentDate').val();
    const appointmentTime = $('#appointmentTime').val();
    const appointmentDescription = $('#appointmentDescription').val();
    const appointmentStatus = $('#appointmentStatus').val();

    // Fetch client name based on clientId
    $.ajax({
        url: `http://127.0.0.1:8000/api/clients/${clientId}`, // Adjust the URL to fetch client details
        method: 'GET',
        success: function (clientData) {
            const clientName = clientData.name; // Assuming the client's name is in clientData.name

            // Now, send the appointment data including clientName
            $.ajax({
                url: 'http://127.0.0.1:8000/api/appointments',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    clientName: clientName, // Now includes the client name
                    date: appointmentDate,
                    time: appointmentTime,
                    description: appointmentDescription,
                    status: appointmentStatus,
                    reason: $('#appointmentReason').val() // Include reason if you have it in the modal
                }),
                success: function (response) {
                    alert('Appointment added successfully!');
                    $('#addAppointmentModal').modal('hide');
                    fetchAppointments(); // Refresh the appointment list
                },
                error: function (error) {
                    console.log("Error adding appointment: ", error);
                }
            });
        },
        error: function (error) {
            console.log("Error fetching client name: ", error);
        }
    });
});

    });
  </script>
</body>

</html>
