<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gift Selector</title>
</head>
<body>
    <h2>Select Gifts</h2>
    <form action="process_gift.php" method="GET">
        <h3>Available Gifts:</h3>
        <label><input type="checkbox" name="gift_indices[]" value="0"> Book</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="1"> Toy</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="2"> Gadget</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="3"> Video Game</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="4"> Headphones</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="5"> Smartphone</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="6"> Laptop</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="7"> Watch</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="8"> Shoes</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="9"> Wallet</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="10"> Headset</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="11"> Camera</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="12"> Drone</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="13"> Smart Watch</label><br>
        <label><input type="checkbox" name="gift_indices[]" value="14"> Bluetooth Speaker</label><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
