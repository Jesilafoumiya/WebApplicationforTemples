<?php

$firstname =$_POST['firstname'];

if(isset($_POST['lastname']))
{
    $lastname = $_POST['lastname'];
}
else
{
    $lastname = "";
}

$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "vibrotech.seo@gmail.com";

$msg = '<h4>This mail From Website</h4> <br>
            <table>
                <tr>
                    <th>First Name</th>
                    <td>:</td>
                    <td>'.$firstname.'</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>'.$email.'</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>:</td>
                    <td>'.$subject.'</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>:</td>
                    <td>'.$message.'</td>
                </tr>
            </table>';
                
            mail($to, $subject, $msg);

            echo 'Success';
?>