<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>
  <body>
	<div class="col-lg-4 col-md-12">
		<div class="panel bk-widget bk-border-off bk-noradius">
			<div class="panel-heading bk-bg-primary">
				<div class="row">
					<div class="col-xs-8 text-left bk-vcenter">
						<h6 class="bk-margin-off">Application History</h6>
					</div>
					<div class="col-xs-4 bk-vcenter text-right">
						<i class="fa fa-users"></i>
					</div>
				</div>
			</div>
			<div class="panel-body bk-bg-white bk-padding-off-top bk-padding-off-bottom">


				<?php foreach ($applicationinfo as $one): ?>

				<div class="row">
					<div class="col-xs-9 bk-vcenter">
						<h5 class="bk-fg-primary bk-margin-off-bottom"></h5>
						<p>
							<?php echo "UserID: ".$one[1]."<br/>Reason:".$one[2]."State:".$one[3];?>                                    
						</p>
					</div>
				</div>

   			 	<?php endforeach; ?>

			</div>
			<div class="panel-body bk-bg-very-light-gray bk-padding-top-5 bk-padding-bottom-5 ">
				<div class="row">
					<div class="col-xs-6">
						<a href="index.php?page=<?php echo $prev;?>" class="bk-fg-textcolor"><small><i class="fa fa-angle-left"></i> PREVIOUS</small></a>
					</div>
					<div class="col-xs-6 text-right">
						<a href="index.php?page=<?php echo $next;?>" class="bk-fg-textcolor"><small>NEXT <i class="fa fa-angle-right"></i></small></a>
					</div>
				</div>
			</div>
		</div>
	</div>	




  </body>
</html>

