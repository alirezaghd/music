<?php

include "header.php";
include "database.php";

?>

<div class="container">
    <div class="row justify-content-center mt-5">

        <div class="col-5">
            <div class="card">

                <div class="card-header ">
                    ورود به حساب کاربری
                </div>

                <div class="card-body">
                    <form method="post" action="admin_login_procass.php">
                        <div class="mb-3">
                            <label class="form-label ">نام کاربری</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label ">گذرواژه</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label " for="exampleCheck1">مرا به خاطر بسپار</label>
                        </div>
                        <button type="submit" class="btn btn-primary">ورود</button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>


<?php include "footer.php" ?>
