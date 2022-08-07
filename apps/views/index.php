<?php require 'static/sidebar.php' ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Projects</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-info mr-5" data-toggle="modal" data-target="#projectModal">New Project</button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th style="width: 1%">
                    #
                  </th>
                  <th style="width: 20%">
                    Project Name
                  </th>
                  <th style="width: 30%">
                    Team Members
                  </th>
                  <th>
                    Project Progress
                  </th>
                  <th style="width: 8%" class="text-center">
                    Status
                  </th>
                  <th style="width: 20%">
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    #
                  </td>
                  <td>
                    <a>
                      AdminLTE v3
                    </a>
                    <br>
                    <small>
                      Created 01.01.2019
                    </small>
                  </td>
                  <td>
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                      </li>
                      <li class="list-inline-item">
                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                      </li>
                    </ul>
                  </td>
                  <td class="project_progress">
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                      </div>
                    </div>
                    <small>
                      57% Complete
                    </small>
                  </td>
                  <td class="project-state">
                    <span class="badge badge-success">Success</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
  <!-- Modal -->
  <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Project Name</label>
              <input type="text" class="form-control" id="projectName" placeholder="project name">
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('#projectModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  })
</script>
<?php require 'static/footer.php' ?>