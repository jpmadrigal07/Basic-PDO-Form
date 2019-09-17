<?php
if(isset($_POST["submit"])) {

$hostname='localhost';
$username='root';
$password='';
$database='form';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "INSERT INTO user_2 (first_name, last_name, age, email, mobile, city, address, birthday, credit_card_user, payment_method, shop_location, new_client, ads_promo, gender, date_created) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["age"]."','".$_POST["email"]."','".$_POST["mobile"]."','".$_POST["city"]."','".$_POST["address"]."','".$_POST["birthday"]."','".$_POST["credit_card_user"]."','".$_POST["payment_method"]."','".$_POST["shop_location"]."','".$_POST["new_client"]."','".$_POST["ads_promo"]."','".$_POST["gender"]."',NOW())";
    if ($dbh->query($sql)) {
        echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
    } else {
        echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
    }

    $dbh = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form 2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

    <!-- Grey with black text -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <h5 class="mr-md-auto font-weight-normal text-light">Form</h5>
            <nav class="my-2 mr-md-3">
                <a class="p-2 text-light" href="index.php">Form 1</a>
                <a class="p-2 text-light" href="form2.php">Form 2</a>
                <a class="p-2 text-light" href="form3.php">Form 3</a>
            </nav>
        </div>
    </nav>
    <!-- 
    - First Name 
    - Last Name 
    - Age
    - Email 
    - Mobile 
    - City 
    - Address 
    - Birthday 
    - Credit Card User 
    - Method of Payment 
    - Shop Location
    - New Client?
    -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="first_name" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="last_name" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Age</label>
                                <input type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="age" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mobile</label>
                                <input type="tel" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="mobile" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="city" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="address" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Birthday</label>
                                <input type="date" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="birthday" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Credit Card User</label>
                                <select class="form-control" name="credit_card_user" id="exampleFormControlSelect1"
                                    required>
                                    <option value="">-- Select Option --</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Method of Payment</label>
                                <select class="form-control" name="payment_method" id="exampleFormControlSelect1"
                                    required>
                                    <option value="">-- Select Option --</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Credit Card</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Shop Location</label>
                                <input type="text" class="form-control" name="shop_location" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="asdasd" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">New Client?</label>
                                <select class="form-control" name="new_client" id="exampleFormControlSelect1" required>
                                    <option value="">-- Select Option --</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Ads/Promo</label>
                                <select class="form-control" name="ads_promo" id="exampleFormControlSelect1" required>
                                    <option value="">-- Select Option --</option>
                                    <option value="199">199</option>
                                    <option value="299">299</option>
                                    <option value="399">399</option>
                                    <option value="499">499</option>
                                    <option value="599">599</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Male/Female</label>
                                <select class="form-control" name="gender" id="exampleFormControlSelect1" required>
                                    <option value="">-- Select Option --</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-default btn-block" value="Submit" name="submit" />
                </form>
            </div>
        </div>
    </div>

    <script src="" async defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>