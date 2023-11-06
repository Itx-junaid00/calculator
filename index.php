<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
  </head>
  <body>
    <form action="calculator.php" method="post">
      <input type="text" name="num1" /><br /><br />
      <input type="text" name="num2" /><br /><br />
      <select name="operator">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mul">Multiplication</option>
        <option value="div">Division</option>
      </select>
      <input type="submit" name="calculate" />
    </form>
  </body>
</html>
