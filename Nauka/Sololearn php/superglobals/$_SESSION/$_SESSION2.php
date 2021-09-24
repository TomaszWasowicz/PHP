<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John" tylko wtedy jak pierwsza
// sesja jest niezakonczona
?>

</body>
</html>