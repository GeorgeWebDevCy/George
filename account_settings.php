<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo getBaseUrl();?>/Images/tablg.png" type="image/icon type">
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Account Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Account Settings
    </h4>

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-address">Address</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-orders">Orders</a>
			<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
			<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-edit">Edit Profile</a>
			<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-delete">Delete Profile</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
		  
		  <!-- ACCOUNT GENERAL-->
		  
            <div class="tab-pane fade active show" id="account-general">

              <div class="card-body media align-items-center">
                <img src="<?php echo getBaseUrl();?>/Images/avatar" alt="" class="d-block ui-w-80">
                <div class="media-body ml-4">
                  <label class="btn btn-outline-primary">
                    Upload new photo
                    <input type="file" class="account-settings-fileinput">
                  </label> &nbsp;
                  <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                  <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
              </div>
              <hr class="border-light m-0">

              <div class="card-body">
                <div class="form-group" id="username">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control mb-1" >
                </div>
                <div class="form-group" ="name">
                  <label class="form-label">Full Name</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="form-group" id="email">
                  <label class="form-label">E-mail</label>
                  <input type="text" class="form-control mb-1" >
                  
                </div>
                <div class="form-group" id="company">
                  <label class="form-label">Company</label>
                  <input type="text" class="form-control" value="Company Ltd.">
                </div>
              </div>

            </div>
			
			<!--CHANGE PASSWORD-->
			
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">

                <div class="form-group"id="currentpass">
                  <label class="form-label">Current password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group" id="newpass">
                  <label class="form-label">New password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group" >
                  <label class="form-label">Repeat new password</label>
                  <input type="password" class="form-control">
                </div>

              </div>
            </div>
			
			<!--ADDRESS-->
			
            <div class="tab-pane fade" id="account-address">
              <div class="card-body pb-2">

                <div class="form-group" id="bio">
                  <label class="form-label">Bio</label>
                  <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group" id="address">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control">
                </div>
				<div class="form-group" id="postalcode">
                  <label class="form-label">Postal Code</label>
                  <input type="text" class="form-control" >
				  			 				 
                </div>
                <?php echo get_country_select();?>
			

              </div>
              
              <div class="card-body pb-2">

                
                <div class="form-group" id="city">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="form-group" id="phone">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" >
				  
				 
				  				 
                </div>
				

              
			</div>
				</div>
				
			<!-- ORDERS -->
			
            <div class="tab-pane fade" id="account-orders">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" value="https://twitter.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" value="https://www.facebook.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Google+</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">LinkedIn</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" value="https://www.instagram.com/user">
                </div>
		       </div>
			</div>
			
			<!-- NOTIFICATIONS-->
			
            <div class="tab-pane fade" id="account-notifications">
              <div class="card-body pb-2">

                <h6 class="mb-4">Activity</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone comments on my article</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone answers on my forum thread</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone follows me</span>
                  </label>
                </div>
              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">Application</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">News and announcements</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Weekly product updates</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Weekly blog digest</span>
                  </label>
                </div>

              </div>
			  
              </div>
			  <!--Edit Profile-->
			
            <div class="tab-pane fade" id="account-edit">
              <div class="card-body pb-2">

                <form id="register-form" method="post" action="edituser.php" >
        <table border="0.5" >
			<tr>
                <td><label for="user_id"><b><em>Current UserName:</em></b></label></td>
                <td><input type="text" name="user_id" id="cuser_id" ></td>
            </tr>
			<tr>
                <td><label for="user_id"><b><em>User ID:</em></b></label></td>
                <td><input type="number" name="id" id="id" ></td>
            </tr>
            <tr>
                <td><label for="user_id"><b><em>New UserName:</em></b></label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass"><b><em>New Password:</em></b></label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>New Country:</em></b></label></td>
                <td><input type="country" name="user_country" id="user_country"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>New Email:</em></b></label></td>
                <td><input type="email" name="user_email" id="user_email"></input></td>
            </tr>
			<tr>
                <td><label for="user_pass"><b><em>New Telephone:</em></b></label></td>
                <td><input type="telephone" name="user_telephone" id="user_telephone"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Edit" />
                <td><input type="reset" value="Reset"/>
				<!--<button type="submit" name="submit" id="submit" value="read">Edit</button>-->
            </tr>
			<tr>
			<td><input style="margin-left:90px;" type="checkbox" name="rememberusername" id="rememberusername" value="1" /> <em>Save Changes</em></td>

			</tr>
			</table>
			</form>

              </div>
            </div>
			
			<!--Delete Profile-->
			
            <div class="tab-pane fade" id="account-delete">
              <div class="card-body pb-2">

                <form id="register-form" method="post" action="deleteuser.php" >
				<table border="0.5" >
            <tr>
                <td><label for="user_id"><b><em>Delete User by Username :</em></b></label></td>
                <td><input type="text" name="deleteuser_id" id="deleteuser_id"></td>
            </tr>
           
            <tr>
                <td><input type="submit" value="Delete" />
                <td><input type="reset" value="Reset"/>
            </tr>
			<tr>
			<td><input style="margin-left:120px;" type="checkbox" name="rememberusername" id="rememberusername" value="1" /><em> Save Changes</em></td>
			
			</tr>
			</table>
			</form>

              </div>
            </div>
			
            </div>
			
            </div>
			
          </div>
        </div>
		
      </div>
	  
    </div>

    <div class="text-right mt-3" style="margin-right:20%">
      <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
      <button type="button" class="btn btn-default">Cancel</button>
    </div>

  </div>

<style type="text/css">
body{
    background: #f5f5f5;
    margin-top:20px;
}

.ui-w-80 {
    width: 80px !important;
    height: auto;
}

.btn-default {
    border-color: rgba(24,28,33,0.1);
    background: rgba(0,0,0,0);
    color: #4E5155;
}

label.btn {
    margin-bottom: 0;
}

.btn-outline-primary {
    border-color: #26B4FF;
    background: transparent;
    color: #26B4FF;
}

.btn {
    cursor: pointer;
}

.text-light {
    color: #babbbc !important;
}

.btn-facebook {
    border-color: rgba(0,0,0,0);
    background: #3B5998;
    color: #fff;
}

.btn-instagram {
    border-color: rgba(0,0,0,0);
    background: #000;
    color: #fff;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 1px 4px rgba(24,28,33,0.012);
}

.row-bordered {
    overflow: hidden;
}

.account-settings-fileinput {
    position: absolute;
    visibility: hidden;
    width: 1px;
    height: 1px;
    opacity: 0;
}
.account-settings-links .list-group-item.active {
    font-weight: bold !important;
}
html:not(.dark-style) .account-settings-links .list-group-item.active {
    background: transparent !important;
}
.account-settings-multiselect ~ .select2-container {
    width: 100% !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.material-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24, 28, 33, 0.03) !important;
}
.material-style .account-settings-links .list-group-item.active {
    color: #4e5155 !important;
}
.dark-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(255, 255, 255, 0.03) !important;
}
.dark-style .account-settings-links .list-group-item.active {
    color: #fff !important;
}
.light-style .account-settings-links .list-group-item.active {
    color: #4E5155 !important;
}
.light-style .account-settings-links .list-group-item {
    padding: 0.85rem 1.5rem;
    border-color: rgba(24,28,33,0.03) !important;
}



</style>

<script type="text/javascript">

</script>
</body>
</html>