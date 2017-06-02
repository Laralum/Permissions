
<?php 

	//Default roles and permissions
	$permission_names = ["Laralum Access","Notifications Access", "Create Notifications", "View Notifications", "Edit Notifications Settings", "Permissions Access","Create Permissions", "Update Permissions", "Delete Permissions", "Roles Access", "Create Roles", "Update Roles", "View Roles", "Manage Role Permissions", "Delete Roles", "Update Settings", "Users Access", "Create Users", "Update Users", "View Users", "Manage Users Roles", "Delete Users", "CRUD Access"];

	if (in_array($permission->name, $permission_names )) {

		// Add _ , example Laralum Access Laralum_Access
		$to_permissions_name_translations = str_replace(" ", "_", $permission->name);
		
		$translated = __('laralum_permissions::permissions.name.'.$to_permissions_name_translations);

		//if not exist translation print the original name
		if ($translated == 'laralum_permissions::permissions.name.'.$to_permissions_name_translations) {
			echo $permission->name;
		}
		else{
			echo __('laralum_permissions::permissions.name.'.$to_permissions_name_translations);
		}

	}
	else{
		echo $permission->name;
	}

?>