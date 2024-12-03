<?php
if (isset($_GET['gift_indices'])) {
    $gift_indices = $_GET['gift_indices'];
    
    $indices_str = implode(",", $gift_indices);

    $command = escapeshellcmd("python3 gift_selector.py '$indices_str'");
    $output = shell_exec($command);
    
    echo $output;
} else {
    echo "<h2>Error:</h2>";
    echo "<p>No gifts selected. Please select at least one gift.</p>";
}
?>