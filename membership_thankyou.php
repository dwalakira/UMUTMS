<?php
	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");

	if($_GET['redir']==1){
		echo '<META HTTP-EQUIV="Refresh" CONTENT="5;url=index.php?signIn=1">';
	}
?>

<center>
	<div style="width: 500px; text-align: left;">
		<h1 class="TableTitle"><?php echo $Translation['thanks']; ?></h1>

		
		</div>
</center>
<?php include_once("$currDir/footer.php"); ?>
