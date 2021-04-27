<div class="list-group ">
              <a href="dashboard.php?page=home" class="list-group-item list-group-item-action active">
                <i class="fas fa-tachometer-alt"></i>
                 Dashboard
              </a>
              <a href="dashboard.php?page=create_user" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Create Users <span class="badge badge-primary"></span></a>
              <a href="dashboard.php?page=manage_user" class="list-group-item list-group-item-action"> <i class="fas fa-user-cog"></i> Manage Users <span class="badge badge-primary"><?php echo getTotals('tbl_users')?></span></a>
              <a href="dashboard.php?page=freelancer" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Manage Freelancers <span class="badge badge-primary"><?php echo getTotals('tbl_freelancers')?></span></a>
  
            </div>