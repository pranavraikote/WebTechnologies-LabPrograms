<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="refresh" content="1"/>

        <style>
            p
            {
                color: White;
                font-size: 40px;
                text-align: center;
            }
            body
            {
                background-color: Orange;            
            }
        </style>

        <p>
            <?php 
                date_default_timezone_set('Asia/Kolkata');
                echo date(" H : i : s a");
            ?>
        </p>
    </head>
</html>
