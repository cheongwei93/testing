<html>
    <head>
        <title>List of KL Restaurant</title>
    </head>

    <body>
        <center>
            <h1>List of KL Restaurant</h1>
            <!--create table structure using HTML first-->
            <table border="1">
                <tr>
                    <th>Restaurant ID</th>
                    <th>Restaurant Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                <tr>
                    <th>0</th>
                    <th>Subway Restaurant</th>
                    <th>Menara Standard Chartered, TPM</th>
                    <th>03-22441234</th>
                </tr>
                <?php
                    $connectionInfo = array("UID" => "tp046484", "pwd" => "Abcd1234", "Database" => "simpleweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                    $serverName = "tcp:simplewebtp046484.database.windows.net,1433";
                    $conn = sqlsrv_connect($serverName, $connectionInfo);
                    if(!$conn){
                        die("Error Connection: ".sqlsrv_errors());
                    }else{
                        echo "Success"
                    }
                ?>

            </table>
        </center>
    </body>
</html>