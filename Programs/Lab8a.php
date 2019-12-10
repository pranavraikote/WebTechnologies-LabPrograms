<html>
    <head>
        <style>
            table, td, th
            {
                border: 1px solid black;
                width: 33%;
                text-align: center;
                background-color: Orange;
            }
            table
            {
                margin: auto;
            }
            input, p
            {
                text-align: right;
            }
        </style>
    </head>

    <body>
            <form method="post">
                <table>
                    <tr> <td> Value 1 </td> <td> <input type="text" name="num1" /> </td>
                         <td rowspan="2"><input type="submit" name="submit" value="Calculate"> </td> </tr>
                         <tr> <td> Value 1 </td> <td> <input type="text" name="num2" /> </td> </tr>
            </form>
        
        <?php
            if(isset($_POST['submit']))
            {
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];

                if(is_numeric($n1) and is_numeric($n2))
                {
                    echo "<tr> <td colspan='2'> Addition : </td> <td> <p>".($n1+$n2)."</p> </td> </tr>";
                    echo "<tr> <td colspan='2'> Subtraction : </td> <td> <p>".($n1-$n2)."</p> </td> </tr>";
                    echo "<tr> <td colspan='2'> Multiplication : </td> <td> <p>".($n1*$n2)."</p> </td> </tr>";
                    echo "<tr> <td colspan='2'> Division : </td> <td> <p>".($n1/$n2)."</p> </td> </tr>";
                    echo "</table>";
                }
                else
                {
                    echo "<script type='text/javascript'> alert('Enter Valid Numbers'); </script>";
                }
            }
        ?>
                </table>
    </body>
</html>


                