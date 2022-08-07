<?php require 'static/sidebar.php'; ?>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Personeller</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-info mr-5" data-toggle="modal" data-target="#projectModal">Yeni Personel</button>
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
                    Resim
                  </th>
                  <th style="width: 20%">
                    Personel Adı
                  </th>
                  <th style="width: 30%">
                    Email
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
                <?php foreach ($users as $user) : ?>
                  <tr>
                    <td>
                      <img alt="Avatar" class="table-avatar" src="<?= $user['profil_resmi'] ?>">
                    </td>
                    <td>
                      <a href="<?= url . $user['kullanici_adi'] ?>">
                        <?= $user['ad_soyad'] ?>
                      </a>
                      <br>
                      <small>
                        <?= $user['unvan'] ?>
                      </small>
                    </td>
                    <td>
                      <?= $user['email'] ?>
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
                <?php endforeach; ?>
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
          <h5 class="modal-title" id="exampleModalLabel">Personel Bilgileri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="firstname-lastname">Ad Soyad</label>
              <input type="text" class="form-control" id="firstname-lastname" name="firstname-lastname" placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="username">Kullanıcı Adı</label>
              <input type="text" class="form-control" id="username" placeholder="john_doe">
            </div>
            <div class="form-group">
              <label for="password">Şifre</label>
              <input type="text" class="form-control" id="password" placeholder="123456" disabled>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group">
              <label for="telephone">Telefon No:</label>
              <input type="text" class="form-control" id="telephone" placeholder="555 444 22 11">
            </div>
            <div class="form-group">
              <label for="rank">Unvan</label>
              <input type="text" class="form-control" id="rank" placeholder="developer">
            </div>
            <div class="form-group">
              <label for="user-pic">Profil Resmi</label>
              <input type="file" class="form-control" id="user-pic" placeholder="user-picture">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Ek Dosyalar </label>
              <input type="file" class="form-control" id="add-folder" placeholder="project name">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
            <button type="submit" class="btn btn-primary" name="new-person">Kaydet</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  $('#projectModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
  })
</script>



<?php require 'static/footer.php'; ?>