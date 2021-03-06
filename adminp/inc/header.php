<?php 

	include 'amiadmin.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LitCMS - Admin Panel</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="/adminp/vendor/fontawesome-free/css/all.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  	<link rel="stylesheet" type="text/css" href="/adminp/css/sb-admin-2.min.css">

</head>
<body id="page-top">

	<div id="wrapper">

	    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/adminp/index.php">
		      <div class="sidebar-brand-icon rotate-n-15">
		        <i class="fas fa-car"></i>
		      </div>
		      <div class="sidebar-brand-text mx-3">LitCMS Admin</div>
		    </a>

		    <hr class="sidebar-divider">

		    <div class="sidebar-heading">Content</div>

		    <li class="nav-item">
		    	<a href="/adminp/posts/editPosts.php" class="nav-link">
		    		<i class="fas fa-fw fa-edit"></i>
		    		<span>Posts</span> <!-- Modify, rename, edit and delete posts -->
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a href="/adminp/categories" class="nav-link">
		    		<i class="fas fa-fw fa-list"></i>
		    		<span>Categories</span>
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a href="/adminp/users" class="nav-link">
		    		<i class="fas fa-fw fa-users"></i>
		    		<span>Users</span>
		    	</a>
		    </li>

		    <hr class="sidebar-divider">
		    <div class="sidebar-heading">Site</div>
		    <li class="nav-item">
		    	<a href="/adminp/siteSets" class="nav-link">
		    		<i class="fas fa-fw fa-cog"></i>
		    		<span>Site settings</span>
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a href="/" class="nav-link">
		    		<i class="fas fa-fw fa-eye"></i>
		    		<span>View site</span>
		    	</a>
		    </li>

		</ul>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<!-- TODO: Topbar -->
				<div class="container-fluid">