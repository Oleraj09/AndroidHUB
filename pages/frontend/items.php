<?php 
include "database.php";
$all = "SELECT * FROM apkfile";
$records = mysqli_query($connection ,$all);
while($fetch = mysqli_fetch_assoc($records)){
                echo "
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class='card my-2'>
                            <div class='card-body py-2'>
                                <div class='row'>
                                    <div class='col-3 thumb'>
                                        <img src='pages/backend/files/$fetch[img]'>
                                    </div>
                                    <div class='col-9'>
                                        <h3>$fetch[title]</h3>
                                        <p>
                                            $fetch[desc]
                                        </p>
                                        <a href='pages/backend/files/$fetch[apk]'><buttton type='button' name='submit' class='btn btn-success'>DOWNLOAD</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    ";
}
