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

		    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		      <div class="sidebar-brand-icon rotate-n-15">
		        <i class="fas fa-car"></i>
		      </div>
		      <div class="sidebar-brand-text mx-3">LitCMS Admin</div>
		    </a>

		    <hr class="sidebar-divider">

		    <div class="sidebar-heading">Content</div>

		    <li class="nav-item">
		    	<a href="/adminp/posts/createPost.php" class="nav-link">
		    		<i class="fas fa-fw fa-comment-alt"></i>
		    		<span>Create post</span>
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a href="/adminp/posts/editPost.php" class="nav-link">
		    		<i class="fas fa-fw fa-edit"></i>
		    		<span>Manage posts</span> <!-- Modify, rename, edit and delete posts -->
		    	</a>
		    </li>
		    <li class="nav-item">
		    	<a href="#" class="nav-link">
		    		<i class="fas fa-fw fa-list"></i>
		    		<span>Categories</span>
		    	</a>
		    </li>

		</ul>