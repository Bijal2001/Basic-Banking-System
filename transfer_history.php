<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Banking System</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        body {
                background:url('img/trnsfrbg1.jpg') center center/cover  ;
                height:100vh;
             }

            .navbar-nav li a:hover{
             background-color: whitesmoke !important;
           color: rgb(0, 0, 0)!important;
           border-radius: 15px !important;
        }

        .section_heading {
            text-align: center;
            padding-top: 24px;
            color: black;
            font-family: emoji;
        }
        
        .section_heading span:nth-child(2) {
            display: block;
            margin: 6px auto;
            width: 163px;
            height: 4px;
            border-radius: 10px;
            background: rgb(8 255 232 / 64%);
        }
        
        .heading {
            text-align: center;
            color: white;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        
        .table {
            width: 80%;
            margin: 0px auto;
            margin-top: -25px;
            position: absolute;
            font-size: 20px;
            border: 1px black;
            left: 9.8%;
            top: 25%;
            border-collapse: collapse;
        }
        
        #head {
            text-align: center;
            opacity: 1;
            background-color: white;
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
        
        tr {
            background-color: white;
            opacity: 0.6;
        }
        
        tr:hover {
            background-color: white;
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

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM transfer_history";
    $result = mysqli_query($conn,$sql);
?>
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
        <h2 class="section_heading">
                    <span>Transaction history</span>
                    <span></span>
                </h2>
            <div class="table-responsive-sm">
                <table class="table">
                    <thead class="theading">
                        <tr id="head">
                            <th>Tranferred From</th>
                            <th>Transferred to</th>
                            <th>Amount Transferred(in Rs.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td class="py-2">
                                    <?php echo $rows['sender'] ?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['receiver']?>
                                </td>
                                <td class="py-2">
                                    <?php echo $rows['amount']?>
                                </td>
                            </tr>
                            <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
</body>

</html>