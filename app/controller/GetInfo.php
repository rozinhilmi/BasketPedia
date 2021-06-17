<?php
$query = mysqli_query($conn,"SELECT * FROM request where fullName = '$_POST[customerOrder]'");
?>