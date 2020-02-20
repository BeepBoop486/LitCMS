<?php 

	$index = 0;

	include '../inc/header.php';

	if (isset($_GET['id'])) {
		$get_pid = $_GET['id'];

		$stmt = $conn->prepare("SELECT * FROM posts WHERE id=? LIMIT 1");
		$stmt->bind_param("i", $_GET['id']);
		$stmt->execute();
		$stmt->bind_result($pid, $pname, $pcnt, $pupl, $pthumb, $pdate, $ptags, $pcat, $pis_featured);
		$stmt->fetch();
		$stmt->close();
	}

?>

<section class="s-content s-content--narrow s-content--no-padding-bottom">
	
	<article class="row format-standard">

		<div class="s-content__header col-full">
			<h1 class="s-content__header-title">
				<?php echo $pname; ?>
			</h1>
			<ul class="s-content__header-meta">
				<li class="date"><?php echo $pdate; ?></li>
				<li class="cat">
					In <?php echo $pcat; ?>
				</li>
			</ul>
		</div>

		<div class="s-content__media col-full">
			<div class="s-content__post-thumb">
				<img src="<?php echo $pthumb; ?>">
			</div>
		</div>

		<div class="col-full s-content__main">
			<?php echo nl2br($pcnt); ?>
		</div>

	</article>

</section>

<?php include '../inc/footer.php'; ?>