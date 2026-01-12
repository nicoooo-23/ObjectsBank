<?php
// include class files
include "classes/Account.php";
include "classes/Customer.php";
// accounts here
$accounts = [
    new Account("8119-001", "Savings", 15000),
    new Account("8119-002", "Checking", -2500),
    new Account("8119-003", "Payroll", 8200),
    new Account("8119-004", "Credit", -200)
];
$customer = new Customer("Zoey", "Magtoto", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Accounts</title>
</head>
<body>
<?php
// include header
include "includes/header.php";
?>
<div class="container">
    <h2>Name: <b><?php echo $customer->getFullName(); ?></b></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php
        foreach ($customer->accounts as $account) {
            echo "<tr>";
            echo "<td>{$account->number}</td>";
            echo "<td>{$account->type}</td>";
            // check if zero or negative
            if ($account->getBalance() >= 0) {
                echo "<td class='credit'>₱" . number_format($account->getBalance(), 2) . "</td>";
            } else {
                echo "<td class='overdrawn'>₱" . number_format($account->getBalance(), 2) . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</div>
<?php
// include footer
include "includes/footer.php";
?>
</body>
</html>
