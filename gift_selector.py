import sys

GIFT_LIST = [
    "Book", "Toy", "Gadget", "Video Game", "Headphones", "Smartphone", 
    "Laptop", "Watch", "Shoes", "Wallet", "Headset", "Camera", "Drone", 
    "Smart Watch", "Bluetooth Speaker"
]

def validate_and_parse_input(input_data):
    try:
        indices = [int(i) for i in input_data.split(",")]
        if not all(0 <= i < len(GIFT_LIST) for i in indices):
            raise ValueError("Indices must be within the range of available gifts.")
        return indices
    except ValueError:
        raise ValueError("All input values must be integers separated by commas.")

def calculate_gift_code(indices):
    gift_code = 0
    for index in indices:
        gift_code |= (1 << index) 
    return gift_code

def display_selected_gifts(indices):
    selected_gifts = [GIFT_LIST[i] for i in indices]
    return ", ".join(selected_gifts)

def main():
    if len(sys.argv) != 2:
        print("<p>Error: One input is required (gift indices separated by commas).</p>")
        return

    indices_input = sys.argv[1]

    try:
        
        indices = validate_and_parse_input(indices_input)
    except ValueError as e:
        print(f"<p>Error: {e}</p>")
        return

   
    gift_code = calculate_gift_code(indices)

    selected_gifts = display_selected_gifts(indices)

    print("<html><body>")
    print("<h2>Selected Gifts:</h2>")
    print(f"<p>Selected Gifts: {selected_gifts}</p>")
    print(f"<p>Unique Gift Code: {gift_code}</p>")
    print("</body></html>")

if __name__ == "__main__":
    main()