<html>
    <body>
        <form action="index.php" method="post">
            <input type="number" name="num1" id="num1" required>
            <select name="sel" id="sel">
                <option value="+" name="+">+</option>
                <option value="-" name="-">-</option>
                <option value="x" name="x">x</option>
                <option value="÷" name="÷">÷</option>
            </select>
            <input type="number" name="num2" id="num2" required>
            <button type="submit" name="sub">Calculate</button>
        </form>
        <?php
            if (isset($_POST['sub'])) {
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $opr = $_POST['sel'];
                echo "$n1 $opr $n2 = ";
                switch ($opr) {
                    case '+':
                        echo ($n1+$n2);
                        break;
                    case '-':
                        echo ($n1-$n2);
                        break;
                    case 'x':
                        echo ($n1*$n2);
                        break;
                    case '÷':
                        echo ($n1/$n2);
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
        ?>
    </body>
</html>