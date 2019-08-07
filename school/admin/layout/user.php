<li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../foto_user/<?php echo $_SESSION['foto']; ?>" border="0" class="user-image" alt="User Image"/>
              <span class="hidden-xs">
              <?php echo $_SESSION['nama']; /*<?= $_SESSION['email']; ?> ini sama dengan echo dan ini fersi terpendek*/
              ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../foto_user/<?php echo $_SESSION['foto']; ?>" border="0" class="img-circle" alt="User Image"/>
                <p>
                  <?php echo $_SESSION['nama']; /*<?= $_SESSION['email']; ?> ini sama dengan echo dan ini fersi terpendek*/
                  ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="http://localhost/adminlte/index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>