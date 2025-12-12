import qrcode
import qrcode.image.svg
import os
import csv

# === School Codes ===
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
    "36KC": "kanamecho",
    "37NM": "naka-meguro"

}

# === Japanese School Names ===
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
    "kanamecho": "要町",
    "naka-meguro": "中目黒"
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
    "se1": "landing",
    "sa1": "app-direct",
}

# === QR Settings ===
qr_fill_color = "#534143"
qr_bg_color = "#ffffff"
image_format = "PNG"
base_url = "https://kids-up.jp/qr"

# === Output root ===
output_root = "qr_codes/seasonal_1"

def generate_qr(campaign_key, school_code, school_name, medium_key, medium_name, folder_path):
    qr_hash = f"#{campaign_key}-{school_code}-{medium_key}"
    full_url = f"{base_url}{qr_hash}"
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

    if image_format == "SVG":
        img = qr.make_image(image_factory=qrcode.image.svg.SvgImage)
    else:
        img = qr.make_image(fill_color=qr_fill_color, back_color=qr_bg_color)

    img.save(filepath)
    return filepath

def main():
    processed_folders = {}

    for medium_key, medium_name in medium_codes.items():
        # Flyers special case
        if medium_key == "fl":
            # EV1 goes to flyer
            folder_name = "flyer"
            folder_path = os.path.join(output_root, folder_name)
            os.makedirs(folder_path, exist_ok=True)
            csv_path = os.path.join(folder_path, "qr_code_filenames.csv")
            mode = "w" if folder_name not in processed_folders else "a"
            with open(csv_path, mode=mode, newline="", encoding="utf-8") as csvfile:
                writer = csv.writer(csvfile)
                for school_code, english_school_name in school_codes.items():
                    japanese_school_name = japanese_school_names[english_school_name]
                    filepath = generate_qr("ev1", school_code, english_school_name, medium_key, medium_name, folder_path)
                    print(f"✅ {filepath}")
                    writer.writerow([japanese_school_name, os.path.basename(filepath)])
            processed_folders[folder_name] = True

            # EA1 goes to flyer-app
            folder_name = "flyer-app"
            folder_path = os.path.join(output_root, folder_name)
            os.makedirs(folder_path, exist_ok=True)
            csv_path = os.path.join(folder_path, "qr_code_filenames.csv")
            mode = "w" if folder_name not in processed_folders else "a"
            with open(csv_path, mode=mode, newline="", encoding="utf-8") as csvfile:
                writer = csv.writer(csvfile)
                for school_code, english_school_name in school_codes.items():
                    japanese_school_name = japanese_school_names[english_school_name]
                    filepath = generate_qr("ea1", school_code, english_school_name, medium_key, medium_name, folder_path)
                    print(f"✅ {filepath}")
                    writer.writerow([japanese_school_name, os.path.basename(filepath)])
            processed_folders[folder_name] = True

        else:
            # All other media only EV1
            folder_name = medium_name
            folder_path = os.path.join(output_root, folder_name)
            os.makedirs(folder_path, exist_ok=True)
            csv_path = os.path.join(folder_path, "qr_code_filenames.csv")
            mode = "w" if folder_name not in processed_folders else "a"
            with open(csv_path, mode=mode, newline="", encoding="utf-8") as csvfile:
                writer = csv.writer(csvfile)
                for school_code, english_school_name in school_codes.items():
                    japanese_school_name = japanese_school_names[english_school_name]
                    filepath = generate_qr("ev1", school_code, english_school_name, medium_key, medium_name, folder_path)
                    print(f"✅ {filepath}")
                    writer.writerow([japanese_school_name, os.path.basename(filepath)])
            processed_folders[folder_name] = True

    print("\n🎉 All QR codes have been generated.")

if __name__ == "__main__":
    main()
