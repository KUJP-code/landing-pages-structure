import qrcode
import qrcode.image.svg
import os
import csv

# === School Codes ===
# Using English names for internal logic and filenames
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

# === Japanese School Names ===
# This dictionary maps English names to their Japanese counterparts for CSV output
japanese_school_names = {
    "denenchofu-yukigaya": "田園調布雪谷",
    "kamata-ekimae": "蒲田駅前",
    "ikegami": "池上",
    "toyocho": "東陽町",
    "nagahara": "長原",
    "monzennakacho": "門前仲町",
    "togoshi": "戸越",
    "seijo": "成城",
    "omori": "大森",
    "waseda": "早稲田",
    "rinkai-shinonome": "りんかい東雲",
    "shinkawasaki": "新川崎",
    "todoroki": "等々力",
    "ojima": "大島",
    "mitaka": "三鷹",
    "futamatagawa": "二俣川",
    "shin-urayasu": "新浦安",
    "tennocho": "天王町",
    "minami-machida-grandberry-park": "南町田グランベリーパーク",
    "oi": "大井",
    "harumi": "晴海",
    "yotsuya": "四谷",
    "akabane": "赤羽",
    "kita-shinagawa": "北品川",
    "mizonokuchi": "溝の口",
    "yakou": "矢向",
    "socola-minami-gyotoku": "ソコラ南行徳",
    "saginomiya": "鷺宮",
    "magome": "馬込",
    "okurayama": "大倉山",
    "musashi-shinjo": "武蔵新城",
    "musashi-kosugi": "武蔵小杉",
    "kawaguchi": "川口",
    "ikebukuro": "池袋",
    "ueno": "上野",
    "kanamecho": "要町"
}

# === Medium Codes ===
medium_codes = {
    "fl": "flyer",
    "tv": "tv",
    "wi": "window",
    "sb": "sandwich-board",
    "tx": "ticket",
    "lv": "looping-video",
    "pv": "promo-video",
    "pc": "postcard",
    "po": "poster",
}

# === Campaigns ===
campaigns = {
    "se5": "landing",      # Landing page
    "sa5": "app-direct",   # App forwarding
}

# === QR Settings ===
qr_fill_color = "#000000"
qr_bg_color = "#ffffff"
image_format = "PNG"
base_url = "https://kids-up.jp/qr"

# === Output root ===
output_root = "qr_codes/seasonal_3_black"

def generate_qr(campaign_key, school_code, school_name, medium_key, medium_name, folder_path):
    """
    Generates a single QR code and saves it to a specified folder.
    
    Args:
        campaign_key (str): The key for the campaign (e.g., "se3").
        school_code (str): The school's unique code (e.g., "01DY").
        school_name (str): The school's name.
        medium_key (str): The medium's unique key (e.g., "fl").
        medium_name (str): The medium's name (e.g., "flyer").
        folder_path (str): The path to the folder where the QR code will be saved.
    
    Returns:
        str: The full path to the saved QR code file.
    """
    qr_hash = f"#{campaign_key}-{school_code}-{medium_key}"
    full_url = f"{base_url}{qr_hash}"

    # Ensure the output directory exists
    os.makedirs(folder_path, exist_ok=True)

    filename = f"{school_code}-{school_name}_{campaign_key}_{medium_key}.png"
    filepath = os.path.join(folder_path, filename)

    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=1,
    )
    qr.add_data(full_url)
    qr.make(fit=True)

    # Use SVG for better scaling if requested, otherwise PNG
    if image_format == "SVG":
        img = qr.make_image(image_factory=qrcode.image.svg.SvgImage)
    else:
        img = qr.make_image(fill_color=qr_fill_color, back_color=qr_bg_color)

    img.save(filepath)
    return filepath

def main():
    """
    Main function to orchestrate the QR code generation.
    It now handles the special case for 'flyer' medium to create separate
    'flyer' and 'flyer-app' folders based on the campaign.
    """
    # Create a list of all medium and campaign combinations to process
    combinations = []
    for medium_key, medium_name in medium_codes.items():
        if medium_key == "fl":
            # Special case for 'flyer' medium, create two separate folders
            combinations.append({"medium_key": "fl", "medium_name": "flyer", "campaign_key": "se3", "folder_name": "flyer"})
            combinations.append({"medium_key": "fl", "medium_name": "flyer", "campaign_key": "sa3", "folder_name": "flyer-app"})
        else:
            # For all other mediums, process all campaigns within a single folder
            for campaign_key, campaign_name in campaigns.items():
                combinations.append({"medium_key": medium_key, "medium_name": medium_name, "campaign_key": campaign_key, "folder_name": medium_name})
    
    processed_folders = {}

    for combo in combinations:
        medium_key = combo["medium_key"]
        medium_name = combo["medium_name"]
        campaign_key = combo["campaign_key"]
        folder_name = combo["folder_name"]
        
        folder_path = os.path.join(output_root, folder_name)
        os.makedirs(folder_path, exist_ok=True)

        # Check if we need to write the header or append to an existing CSV
        csv_path = os.path.join(folder_path, "qr_code_filenames.csv")
        mode = "w"
        if folder_name in processed_folders:
            mode = "a"
        
        with open(csv_path, mode=mode, newline="", encoding="utf-8") as csvfile:
            writer = csv.writer(csvfile)
            
   
            
            # Generate QR codes for all schools for this combination
            for school_code, english_school_name in school_codes.items():
                # Get the Japanese name for CSV output
                japanese_school_name = japanese_school_names[english_school_name]

                filepath = generate_qr(
                    campaign_key, school_code, english_school_name, medium_key, medium_name, folder_path
                )
                print(f"✅ {filepath}")
                # Write the Japanese school name and the filename to the CSV
                filename = os.path.basename(filepath)
                writer.writerow([japanese_school_name, filename])
        
        processed_folders[folder_name] = True

    print("\n🎉 All QR codes for seasonal 3 have been generated.")

if __name__ == "__main__":
    main()
