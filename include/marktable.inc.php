<?php
include 'dbh.inc.php';
$student_id = $_SESSION['id'];

$sql = "SELECT * FROM subject WHERE student_id=$student_id";
$count = 0;
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
        $count = $count + 1;
        echo "<tr>";
        echo "<td>". $count . "</td>";
        echo "<td>". $row['subject_name'] . "</td>";
        echo "<td>". $row['subject_mark'] . "</td>";
        echo '<td><a class="btn btn-primary" href="../include/delete_marks.inc.php?id=' . $row['id'].'" role="button">Delete</a></td>';
        echo "</tr>";
}
$conn->close();

?>