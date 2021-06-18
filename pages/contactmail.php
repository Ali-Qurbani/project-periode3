<?php
if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} else {

        $firstname = ($_POST["firstname"]);
        $tussenvoegsel = ($_POST["tussenvoegsel"]);
        $lastname = ($_POST["lastname"]);
        $email = ($_POST["email"]);
        $message = ($_POST["message"]);

            $to = $email;
            $subject = "Bericht contactpagina www.jesse-is-tegen-comicsans.org";
           
            $message = '
            <!doctype html>
            <html lang="en">
              <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <style>
                table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }
                
                td, th {
                  border: 1px solid #dddddd;
                  text-align: left;
                  padding: 8px;
                }
                
                tr:nth-child(even) {
                  background-color: #dddddd;
                }
                </style>
              </head>
              <body>
                <p>Bericht van http://www.project-periode-3.org</p>
                                                            <table>
                                                            <tr>
                                                              <th>Voornaam</th>
                                                              <th>Tussenvoegsel</th>
                                                              <th>Achternaam</th>
                                                              <th>Email</th>
                                                            </tr>
                                                            <tr>
                                                              <td>' . $firstname . '</td>
                                                              <td>' . $tussenvoegsel . '</td>
                                                              <td>' . $lastname . '</td>
                                                              <td>' . $email . '</td>
                                                            </tr>
                                                          </table>
                  <h2>Bericht:</h2>
                  <p>' . $message . '</p>
                                                      
                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
              </body>
            </html>';

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <' . $email . '>' . "\r\n";
            $headers .= 'Cc: AdminBipolarStoornis@gmail.com' . "\r\n";

            mail($to,$subject,$message,$headers);
    }
?>