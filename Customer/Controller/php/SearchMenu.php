<?php
include "../../Model/mydb.php";

$keyword = $_POST['keyword'] ?? "";

$con = connection();

/* Empty search → show all menu */
if (empty($keyword)) {
    $sql = "SELECT * FROM menu";
} else {
    $sql = "SELECT * FROM menu
            WHERE item_name LIKE '%$keyword%'
               OR category LIKE '%$keyword%'";
}

$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row['menu_id']); ?></td>
            <td><?php echo htmlspecialchars($row['item_name']); ?></td>
            <td><?php echo htmlspecialchars($row['category']); ?></td>
            <td><?php echo htmlspecialchars($row['price']); ?></td>
            <td><?php echo htmlspecialchars($row['quantity']); ?></td>
        </tr>
        <?php
    }
} else {
    echo '<tr>
            <td colspan="5" style="text-align:center; padding:15px;">
                No matching items found
            </td>
          </tr>';
}

mysqli_close($con);
exit;
