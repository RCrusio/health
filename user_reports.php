<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reports</title>
    <link rel="stylesheet" href="assets/css/container.css">
    <link rel="stylesheet" href="assets/css/sidebar2.css">
    <link rel="stylesheet" href="assets/css/table.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include 'includes/user_sidebar.php';?>
<section class="home-section">
    <div class="container_form">
        <H1>Personal Reports</H1>
        <div class="dcf-overflow-x-auto" tabindex="0">
        <table class="dcf-table dcf-table-bordered dcf-table-striped dcf-w-100%">
        	<thead>
        		<tr>
        			<th class="dcf-txt-center" scope="col">Batch</th>
        			<th class="dcf-txt-center" scope="col">Name</th>
        			<th class="dcf-txt-center" scope="col">Category</th>
        			<th class="dcf-txt-center" scope="col">Expire Date</th>
        			<th class="dcf-txt-center" scope="col">Buttons</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td data-label="Batch"></td>
        			<td data-label="Name"></td>
        			<td data-label="Category"></td>
        			<td data-label="Expire Date"></td>
        			<td data-label="Buttons"></td>
        		</tr>
        		<tr>
        			<td data-label="Batch"></td>
        			<td data-label="Name"></td>
        			<td data-label="Category"></td>
        			<td data-label="Expire Date"></td>
        			<td data-label="Buttons"></td>
        		</tr>
        		<tr>
        			<td data-label="Batch"></td>
        			<td data-label="Name"></td>
        			<td data-label="Category"></td>
        			<td data-label="Expire Date"></td>
        			<td data-label="Buttons"></td>
        		</tr>
        	</tbody>
        </table></div>

    </section>
    <script src="assets/js/sidebar2.js"></script>
</body>
</html>