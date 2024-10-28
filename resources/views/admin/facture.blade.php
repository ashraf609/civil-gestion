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
            <h1 class="h3 mb-0 text-gray-800">Listes Des Factures</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Factures</li>
              <li class="breadcrumb-item active" aria-current="page">Listes des Factures</li>
            </ol>
          </div>

          <div class="row">
          <!-- Employee Table -->
<!-- Materials Table -->
<!-- Invoice Table -->
<!-- Invoice Table -->
<div class="col-lg-12 mb-4">
  <!-- Simple Tables -->
  <div class="card">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Factures</h6>
      <button class="btn btn-primary" data-toggle="modal" data-target="#addInvoiceModal">Add Factures</button>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Project</th>
            <th>Amount</th>
            <th>Issue Date</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="invoiceTableBody">
          <!-- Invoice rows will be dynamically inserted here -->
        </tbody>
      </table>
    </div>
  </div>
</div>



</div>

<!-- Add Invoice Modal -->
<div class="modal fade" id="addInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInvoiceModalLabel">Add New Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addInvoiceForm">
          <div class="form-group">
            <label for="project_id">Project</label>
            <select class="form-control" id="project_id" name="project_id" required></select>
          </div>
          <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
          </div>
          <div class="form-group">
            <label for="issue_date">Issue Date</label>
            <input type="date" class="form-control" id="issue_date" name="issue_date" required>
          </div>
          <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
              <option value="Pending">Pending</option>
              <option value="Paid">Paid</option>
              <option value="Overdue">Overdue</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Add Invoice</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Update Invoice Modal -->
<div class="modal fade" id="updateInvoiceModal" tabindex="-1" role="dialog" aria-labelledby="updateInvoiceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateInvoiceModalLabel">Update Invoice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateInvoiceForm">
          <input type="hidden" id="update_invoice_id" name="invoice_id">
          <div class="form-group">
            <label for="update_project_id">Project</label>
            <select class="form-control" id="update_project_id" name="project_id" required></select>
          </div>
          <div class="form-group">
            <label for="update_amount">Amount</label>
            <input type="number" class="form-control" id="update_amount" name="amount" step="0.01" required>
          </div>
          <div class="form-group">
            <label for="update_issue_date">Issue Date</label>
            <input type="date" class="form-control" id="update_issue_date" name="issue_date" required>
          </div>
          <div class="form-group">
            <label for="update_due_date">Due Date</label>
            <input type="date" class="form-control" id="update_due_date" name="due_date" required>
          </div>
          <div class="form-group">
            <label for="update_status">Status</label>
            <select class="form-control" id="update_status" name="status" required>
              <option value="Pending">Pending</option>
              <option value="Paid">Paid</option>
              <option value="Overdue">Overdue</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update Invoice</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Delete Material Modal -->
<div class="modal fade" id="deleteMaterialModal" tabindex="-1" role="dialog" aria-labelledby="deleteMaterialModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteMaterialModalLabel">Delete Material</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this material?</p>
        <form id="deleteMaterialForm">
          <input type="hidden" id="deleteMaterialId" name="id">
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
    fetchProjects();
    loadInvoices();

    // Handle Add Invoice Form submission
    document.getElementById('addInvoiceForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('http://localhost:3000/api/invoices', {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Invoice added successfully!');
                $('#addInvoiceModal').modal('hide');
                loadInvoices(); // Refresh the invoice list
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Handle Update Invoice Form submission
    document.getElementById('updateInvoiceForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        const data = Object.fromEntries(formData);

        fetch(`http://localhost:3000/api/invoices/${data.invoice_id}`, {
            method: 'PUT',
            body: JSON.stringify(data),
            headers: { 'Content-Type': 'application/json' }
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Invoice updated successfully!');
                $('#updateInvoiceModal').modal('hide');
                loadInvoices(); // Refresh the invoice list
            }
        })
        .catch(error => console.error('Error:', error));
    });

    // Handle Delete Invoice
    function deleteInvoice(invoiceId) {
        fetch(`http://localhost:3000/api/invoices/${invoiceId}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Error: ' + data.error);
            } else {
                alert('Invoice deleted successfully!');
                loadInvoices(); // Refresh the invoice list
            }
        })
        .catch(error => console.error('Error:', error));
    }

    // Load Invoices
   function loadInvoices() {
    fetch('http://localhost:3000/api/invoices')
        .then(response => response.json())
        .then(invoices => {
            const tableBody = document.getElementById('invoiceTableBody');
            tableBody.innerHTML = invoices.map(invoice => `
                <tr>
                    <td>${invoice.id}</td>
                    <td>${invoice.project_name || 'N/A'}</td>
                    <td>${invoice.amount}</td>
                    <td>${invoice.issue_date}</td>
                    <td>${invoice.due_date}</td>
                    <td>${getStatusBadge(invoice.status)}</td>
                    <td>
                        <button class="btn btn-sm btn-warning" onclick="openUpdateInvoiceModal(${invoice.id}, '${invoice.project_id}', '${invoice.amount}', '${invoice.issue_date}', '${invoice.due_date}', '${invoice.status}')">Update</button>
                        <button class="btn btn-sm btn-danger" onclick="confirmDeleteInvoice(${invoice.id})">Delete</button>
                    </td>
                </tr>
            `).join('');
        })
        .catch(error => console.error('Error fetching invoices:', error));
}

    // Get Status Badge
    function getStatusBadge(status) {
        let badgeClass = '';
        switch (status) {
            case 'Pending':
                badgeClass = 'badge badge-warning';
                break;
            case 'Paid':
                badgeClass = 'badge badge-success';
                break;
            case 'Overdue':
                badgeClass = 'badge badge-danger';
                break;
            default:
                badgeClass = 'badge badge-secondary';
        }
        return `<span class="${badgeClass}">${status}</span>`;
    }

    // Open Update Invoice Modal
    window.openUpdateInvoiceModal = function(id, projectId, amount, issueDate, dueDate, status) {
        document.getElementById('update_invoice_id').value = id;
        document.getElementById('update_project_id').value = projectId;
        document.getElementById('update_amount').value = amount;
        document.getElementById('update_issue_date').value = issueDate;
        document.getElementById('update_due_date').value = dueDate;
        document.getElementById('update_status').value = status;

        fetchProjects(); // Reload project options in the update modal
        $('#updateInvoiceModal').modal('show');
    };

    // Confirm Delete Invoice
    window.confirmDeleteInvoice = function(id) {
        if (confirm('Are you sure you want to delete this invoice?')) {
            deleteInvoice(id);
        }
    };

    // Fetch Projects for Dropdowns
    function fetchProjects() {
        fetch('http://localhost:3000/api/projects')
            .then(response => response.json())
            .then(projects => {
                const projectSelects = document.querySelectorAll('#project_id, #update_project_id');
                projectSelects.forEach(select => {
                    select.innerHTML = projects.map(project => 
                        `<option value="${project.id}">${project.name}</option>`
                    ).join('');
                });
            })
            .catch(error => console.error('Error fetching projects:', error));
    }
});

</script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</body>

</html>