<?php
include('db_connect.php');

// Fetch product confirmations from the database
$query = "SELECT * FROM confirm1";
$result = mysqli_query($connection, $query);

// Display product confirmations in a table
echo "<table>
        <tr>
            <th>ID</th>
          
            <th>Status</th>
            <th>Admin Notes</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
           
            <td>{$row['confirmation_status']}</td>
            <td>{$row['admin_notes']}</td>
        </tr>";
}

echo "</table>";

// Close database connection
mysqli_close($connection);



// Example form for updating product confirmation
echo "<form action='update_confirm.php' method='post'>
        <label for='confirmation_status'>Confirmation Status:</label>
        <input type='text' name='confirmation_status' required>

        <label for='admin_notes'>Admin Notes:</label>
        <textarea name='admin_notes'></textarea>

        <input type='submit' value='Update Confirm'>
      </form>";

?>
