<?php 
include 'header.php';
include 'db.php';
// session_start(); 

?>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Account Settings /</span> Notifications
    </h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-account.php"><i class="bx bx-user me-1"></i> Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-connections.php"><i class="bx bx-link-alt me-1"></i>
              Connections</a>
          </li>
        </ul>
        <div class="card">
          <!-- Notifications -->
          <h5 class="card-header">Recent Devices</h5>
          <div class="card-body">
            <span>We need permission from your browser to show notifications.
              <span class="notificationRequest"><strong>Request Permission</strong></span></span>
            <div class="error"></div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-borderless border-bottom">
              <thead>
                <tr>
                  <th class="text-nowrap">Type</th>
                  <th class="text-nowrap text-center">✉️ Email</th>
                  <th class="text-nowrap text-center">🖥 Browser</th>
                  <th class="text-nowrap text-center">👩🏻‍💻 App</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap">New for you</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">Account activity</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">A new browser used to sign in</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="text-nowrap">A new device is linked</td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                    </div>
                  </td>
                  <td>
                    <div class="form-check d-flex justify-content-center">
                      <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-body">
            <h6>When should we send you notifications?</h6>
            <form action="javascript:void(0);">
              <div class="row">
                <div class="col-sm-6">
                  <select id="sendNotification" class="form-select" name="sendNotification">
                    <option selected>Only when I'm online</option>
                    <option>Anytime</option>
                  </select>
                </div>
                <div class="mt-4">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                  <button type="reset" class="btn btn-outline-secondary">Discard</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /Notifications -->
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
  <?php include 'footer.php'; ?>
</div>
<!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->