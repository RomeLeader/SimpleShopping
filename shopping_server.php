<?php

session_start();

echo
    '<html><head></head>

    <body align="center">
    <h1>Checking Out</h1>
    <table border align="center">

    <th>
    Item
    </th>

    <th>
    Quantity
    </th>

    <th>
    Price
    </th>

    <th>
    Amount
    </th>';

    if (!($_SESSION["webAppCount"] == 0)) {
echo '
    <tr>

    <td>
    Web Applications
    </td>
    <td>';

    echo $_SESSION["webAppCount"];

    echo '</td>
    <td>
    $95
    </td>

    <td>';

    echo "$" . $_SESSION["webAppCount"] * 95;

    echo '
    </td>
    </tr>';
}

echo '
    <tr>

    <td>
    Javascript
    </td>
    <td>';

    echo $_SESSION["javascriptCount"];

    echo '</td>

    <td>
    $135
    </td>
    <td>';

    echo "$" . $_SESSION["javascriptCount"] * 135;

    echo '
    </td>
    </tr>
    </table>
    </body>
    </html>';

?>