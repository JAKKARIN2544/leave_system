<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("../sql/connection.php");
				//รับค่า user & password
                  $emp_id       = $_POST['emp_id'];
                  $emp_birthday = ($_POST['emp_birthday']);
				//query 
                  $sql="SELECT * FROM tb_employyee Where emp_id = '".$emp_id."' and emp_birthday = '".$emp_birthday."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["emp_id"] = $row["emp_id"];
                      $_SESSION["emp_name"] = $row["emp_firstname"]." ".$row["emp_lastname"];
                      $_SESSION["emp_position"] = $row["emp_position"];

                      if($_SESSION["emp_position"] == "admin"){ 

                        echo "alert(\" เข้าสู่ระบบสำเร็จ\");"; 
                        Header("Location: ../admin/index_admin.php");

                      }

                      if ($_SESSION["emp_position"]=="employyee"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        echo "alert(\" เข้าสู่ระบบสำเร็จ\");"; 
                        Header("Location: ../employyee/index_employyee.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: ../index.php");

        }
?>