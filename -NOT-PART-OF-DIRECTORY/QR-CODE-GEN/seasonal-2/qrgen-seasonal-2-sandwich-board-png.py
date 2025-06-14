import qrcode
import os
from qrcode.image.pil import PilImage

# Define the list of schools and the event URL
school_codes = {
    "01DY": "denenchofu-yukigaya",
    "02KE": "kamata-ekimae",
    "03IG": "ikegami",
    "04TY": "toyocho",
    "05NG": "nagahara",
    "06MN": "monzennakacho",
    "07TG": "togoshi",
    "08SJ": "seijo",
    "09OM": "omori",
    "10WS": "waseda",
    "11RS": "rinkai-shinonome",
    "12SK": "shinkawasaki",
    "13TD": "todoroki",
    "14OJ": "ojima",
    "15MT": "mitaka",
    "16FT": "futamatagawa",
    "17SU": "shin-urayasu",
    "18TN": "tennocho",
    "19MG": "minami-machida-grandberry-park",
    "20OI": "oi",
    "21HM": "harumi",
    "22YT": "yotsuya",
    "23AB": "akabane",
    "24KS": "kita-shinagawa",
    "25MZ": "mizonokuchi",
    "26YK": "yakou",
    "27SM": "socola-minami-gyotoku",
    "28SG": "saginomiya",
    "29MG": "magome",
    "30OK": "okurayama",
    "31MS": "musashi-shinjo",
    "32MK": "musashi-kosugi",
    "33KW": "kawaguchi",
    "34IB": "ikebukuro",
    "35UN": "ueno",
    "36KC": "kanamecho"
}

# Output directory for QR codes
output_dir = "qr_codes/seasonal_2/sandwich_board"
os.makedirs(output_dir, exist_ok=True)

# File to save all the QR code filenames
file_list_path = os.path.join(output_dir, "qr_code_filenames.txt")

# Function to generate QR code
def generate_qr_code(school_code, school_name):
    url = f"https://kids-up.jp/qr#se2-{school_code}-sb"
    
    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=1,
    )
    qr.add_data(url)
    qr.make(fit=True)

    # Create transparent PNG image
    img = qr.make_image(
        image_factory=PilImage,
        fill_color="black",
        back_color=None  # Transparent background
    ).convert("RGBA")  # Ensure image mode supports alpha

    img_filename = os.path.join(output_dir, f"{school_code}-{school_name}_seasonal-2_sandwich_board_qr.png")
    img.save(img_filename)
    print(f"QR code saved as {img_filename}")

    with open(file_list_path, "a") as file_list:
        file_list.write(f"{img_filename}\n")

# Create or clear the file list at the start
with open(file_list_path, "w") as file_list:
    file_list.write("QR Code Filenames:\n")

# Generate QR codes
for school_code, school_name in school_codes.items():
    generate_qr_code(school_code, school_name)

print(f"All QR code filenames have been written to {file_list_path}")
