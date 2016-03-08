<?php
session_start();
echo '<html><head></head></html>';

echo '<body align="center">
      <h1>A Small Shopping Site</h1>

      <form align="justify" method="get">

      <h3>Web Applications</h3>

      <p>This book provides an in-depth examination of the basic concepts and general principles associated with Web application development. The price is $95.</p>

      <select name="webAppCount">

      <option value = "1">1</option>
      <option value = "2">2</option>
      <option value= "3">3</option>
      <option value = "4">4</option>
      <option value = "5">5</option>
      <option value = "6">6</option>
      <option value = "7">7</option>
      <option value = "8">8</option>
      <option value = "9">9</option>
      <option value = "10">10</option>

      </select>

      <input type="submit" value="Add to Cart">

      </form>

      <form align="justify" method="get">
      <h3>Javascript</h3>
      <p>This is both an example-driven programmer\'s guide and a keep-on-your-desk reference with new chapters that explain everything you need to know to get the most out of Javascript. The price is $130. </p>
      <select name="javascriptCount">

      <option value = "1">1</option>
      <option value = "2">2</option>
      <option value= "3">3</option>
      <option value = "4">4</option>
      <option value = "5">5</option>
      <option value = "6">6</option>
      <option value = "7">7</option>
      <option value = "8">8</option>
      <option value = "9">9</option>
      <option value = "10">10</option>

      </select>
      <input type="submit" value="Add to Cart">
      </form>';

//TEST CODE
    $_SESSION["webAppCount"] = $_GET["webAppCount"];
    echo $_SESSION["webAppCount"];
    $_SESSION["javascriptCount"] = $_GET["javascriptCount"];
    echo $_SESSION['javascriptCount'];
      echo

      '<a href="shopping_server.php">Check out</a>

      </body>';

?>