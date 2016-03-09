<?php
session_start(); //Begin the session

echo '<html><head></head></html>';

echo

      '<body align="center">
      <h1 align="center-justify">A Small Shopping Site</h1>

      <form method="get">

      <h3>Web Applications</h3>

      <p>This book provides an in-depth examination of the basic concepts and general principles associated with Web application development. The price is $95.</p>

      <select name="webAppCount">

      <option value = "0">0</option>
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

      <h3>Javascript</h3>
      <p>This is both an example-driven programmer\'s guide and a keep-on-your-desk reference with new chapters that explain everything you need to know to get the most out of Javascript. The price is $130. </p>
      <select name="javascriptCount">

      <option value = "0">0</option>
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

      <br>
      <br>
      <br>
      <br>

      <input type="submit" value="Add to Cart">
      </form>';

    if (array_key_exists('webAppCount', $_GET) && array_key_exists('javascriptCount', $_GET)) //Avoid undefined index error
    {

        $_SESSION["webAppCount"] = $_GET["webAppCount"]; //Store web app order session info
        $_SESSION["javascriptCount"] = $_GET["javascriptCount"]; //Store Javascript order session info
    }
      echo

      '<a href="shopping_server.php">Check out</a>

      </body>';

?>