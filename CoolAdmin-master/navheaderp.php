
<header class="header-desktop">

<div class="section__content section__content--p30">
<div class="container-fluid" >
<div class="header-wrap">
<div class="header-button">
<div class="account-wrap">
<div class="account-item clearfix js-item-menu">
<div class="image">
<img src="images/icon/avatar-01.jpeg" style="max-width: 100%" alt="John Doe" />
</div>
<div class="content">
<?php 
session_start();

 include 'db.php';
$queryuser_db2 = "SELECT * FROM `users` WHERE id = '{$_SESSION['id']}'";
$resultuser_db2 = $connection->query($queryuser_db2);

if ($resultuser_db2->num_rows > 0) {
    while ($rowfirst = $resultuser_db2->fetch_assoc()) {
        $p = $rowfirst['firstname'];
        $email = $rowfirst['email'];
        $d = $rowfirst['lastname'];
        
   }
    
}

?>

<a class="js-acc-btn" ><?php echo   $p  ?> -  ID (<?php echo $_SESSION['id']?>) </a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#"> <img src="images/icon/avatar-01.jpeg"
														alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a ><?= $p. " " . $d ; ?></a>
													</h5>
													<span class="email"><?= $email; ?></span>
												</div>
											</div>
											<div class="account-dropdown__footer">
												<a href="../includes/logout.php"> <i class="zmdi zmdi-power"></i>Logout
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			
       
       
       