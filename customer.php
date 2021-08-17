
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="css/A.animate.css+flaticon.css+tiny-slider.css+glightbox.min.css+aos.css+datepicker.min.css+style.css,Mcc.z2wXGN8Aor.css.pagespeed.cf.rkzq6iDOYd.css">
    <title>Basic Banking System</title>
    <style>
*{
    margin: 0px;
    padding: 0px;
}
#body{
    background:url('img/customerbg.jpg') center center/cover no-repeat ;
    height:100vh;
}
.navbar-nav li a:hover{
    background-color: whitesmoke !important;
    color: rgb(0, 0, 0)!important;
   
     border-radius: 15px !important;
    
}

.heading{
    text-align:center;
    color:Black;
    padding:20px;
    font-family: 'Gill Sans', 'Gill Sans MT', 
    ' Calibri', 'Trebuchet MS', 'sans-serif';
}
.table {
    width: 80%;
    margin: 0px auto;
    position: absolute;
    font-size: 20px;
    border: 1px black;
    left: 9.8%;
    border-collapse: collapse;
}
#head{
    text-align:center;
    opacity: 1;
    background-color:white;
}
td {
    background-color: white;
    font-weight: bold;
    border: 1px;
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
    font-weight: 500;
}
tr{
    background-color: white;
    opacity: 0.6;
}
tr:hover {
    background-color:white;
    color: black;
    opacity: 1;
}
button {
    border: none;
    background: #00FFFF;
    border-radius: 15px;
    width: 150px;
    font-size: 90%;
    transition-duration: 0.4s;
    cursor: pointer;
}
    </style>
</head>
<?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
?>
<body id="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid d-flex">
            <img src="img/logo1.jpg" alt="" width="40" height="40" class="mx-2 d-inline-block align-text-top">
            <a class="navbar-brand" href="#">Banking system</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0  ">
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="customer.php">View customers</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="transfer_history.php">Transaction History</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="#services">Services</a>
                    </li>
                    <li class="nav-item px-3 ">
                        <a class="nav-link active" aria-current="page" href="#contactus">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
<section>
        <h2 class="heading">Customer Details</h2>
    <div class="table-responsive-sm">
        <table class="table">
                    <thead class="theading">
                    <tr id="head">
                        <th >Id</th>
                        <th >Account No.</th>
                        <th >Customer NAME</th>
                        <th>Phone Number</th>
                        <th>BALANCE(in Rs.)</th>
                        <th>TRANSFER MONEY</th>
                        </tr>
                    </thead>
            <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                 <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['account_no']?></td>
                    <td class="py-2"><?php echo $rows['name']?></td>
                    <td class="py-2"><?php echo $rows['phone_no']?></td>
                    <td class="py-2"><?php echo $rows['balance']?></td>
                    <td class="text-center"><a href="transfer.php?account_no= <?php echo $rows['account_no'] ;?>"> <button type="button" class="button">Transfer</button></a></td> 
                </tr>
            <?php
                }
            ?>
            </table>
    </div>
    </section>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
        integrity=" sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
        crossorigin=" anonymous "></script>
</body>

</html>