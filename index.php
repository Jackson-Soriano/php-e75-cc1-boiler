<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <title>Free Coupons</title>
        <meta name="Free Coupons" content="Free Coupons">
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="style.css">
		
    </head>
		<body>
         	<div id="wrapper">
				<h1>Mang Donalds Vouchers!</h1>
				<p class="inline-text">
					We're giving away 
					<span class="inline">vouchers</span>
					<span>as token of appreciation</span>
					<span>for first 10 customer(s)</span>
				</p>
				<form action="process.php" method="POST">
					<input type="hidden" name="action" value="claim">
					<label for="cname">Your name please:</label>
					<input type="text" name="cname" id="cname">
					<span></span>
					<input type="submit" id="name_submit" value="Submit">
				</form>
				<div>
					<div id="div-coupon" >
						<p>50% Discount</p>
						<h3>voucher code</h3>
					</div>
					<div>
						<p>Sorry!</p>
						<h3>Unavailable</h3>
					</div>
					<div class="buttons">
						<form action="process.php" method="POST">
							<input type="hidden" name="action" value="reset">
							<input type="submit" id="reset" value="Reset count">
						</form>
						<form action="process.php" method="POST">
							<input type="hidden" name="action" value="again">
							<input type="submit" id="again" value="Claim Again">
						</form>
					</div>

				</div>
         	</div>
    </body>
</html>