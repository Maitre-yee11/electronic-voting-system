
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Button Example</title>
	<script>
		function performAction1() {
			window.location.href = "actions/area.php";
		}
        function performAction2() {
			window.location.href = "getcandlist.php";
		}
		function performAction3() {
			window.location.href = "givevote.php";
		}
		function performAction4() {
			window.location.href = "actions/logout.php";
		}
	</script>
</head>
<body>
	<button type="button" onclick="performAction1()">View area code</button>
    <button type="button" onclick="performAction2()">View Candidate List of your area</button>
    <button type="button" onclick="performAction3()">Vote</button>
	<button type="button" onclick="performAction4()">Log Out</button>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Option</title>
	<link rel="stylesheet" href="style.css" />
	<script>
		function performAction1() {
			window.location.href = "actions/area.php";
		}
		function performAction2() {
			window.location.href = "getcandlist.php";
		}
		function performAction3() {
			window.location.href = "givevote.php";
		}
		function performAction4() {
			window.location.href = "actions/logout.php";
		}
	</script>
</head>
<body>
	<main>
		<div class="box">
			<div class="inner-box">
				<div class="forms-wrap">
					<form action="index.html" autocomplete="off" class="sign-in-form">
						<div class="heading">
							<h2>Choose correct option</h2>
							<div class="input-wrap">
               				 </div>
						</div>
						<div class="actual-form">
							<button type="button" onclick="performAction1()" class="sign-btn">View Area Code</button>
							<button type="button" onclick="performAction2()" class="sign-btn">View Candidate List of your Area</button>
							<button type="button" onclick="performAction3()" class="sign-btn">Vote</button>
							<button type="button" onclick="performAction4()" class="sign-btn">Logout</button>
						</div>
					</form>
				</div>
				<div class="carousel">
					<div class="images-wrapper">
						<img src="img.jpg" class="image img-1 show" alt="" />
					</div>
				</div>
			</div>
		</div>

