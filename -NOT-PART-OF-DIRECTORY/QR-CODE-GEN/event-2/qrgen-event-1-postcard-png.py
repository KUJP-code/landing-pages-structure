import qrcode
import os
import qrcode.image.svg  # Import the SVG image factory

# Define the list of schools and the event URL
school_codes = {
    "00XX": "generic",

}


# Output directory for QR codes
output_dir = "qr_codes/event_2/postcard"
os.makedirs(output_dir, exist_ok=True)

# File to save all the QR code filenames
file_list_path = os.path.join(output_dir, "qr_code_filenames.txt")

# Function to generate QR code
def generate_qr_code(school_code, school_name):
    # Build the QR code URL
    url = f"https://kids-up.jp/qr#ev2-{school_code}-pc"
    
    # Create QR code
    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=1,
    )
    qr.add_data(url)
    qr.make(fit=True)
    
    # Create a PNG image
    img = qr.make_image(fill_color="#142941", back_color="white")
    
    # Generate the filename for the SVG image
    img_filename = os.path.join(output_dir, f"{school_code}-{school_name}_event-2_ticket_qr.png")
    
    # Save the SVG image
    img.save(img_filename)
    print(f"QR code saved as {img_filename}")
    
    # Append the filename to the text file
    with open(file_list_path, "a") as file_list:
        file_list.write(f"{img_filename}\n")

# Create or clear the file list at the start
with open(file_list_path, "w") as file_list:
    file_list.write("QR Code Filenames:\n")

# Generate QR codes for each school and record filenames
for school_code, school_name in school_codes.items():
    generate_qr_code(school_code, school_name)

print(f"All QR code filenames have been written to {file_list_path}")
