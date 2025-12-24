import os
from PIL import Image, ImageOps

# === SETTINGS ===
input_folder = "/Users/MikeWork/Documents/images-pre"
output_folder = "/Users/MikeWork/Documents/images-post"
landscape_size = (1024, 768)
portrait_size = (768, 1024)
jpg_quality = 90

# === CREATE OUTPUT FOLDER ===
os.makedirs(output_folder, exist_ok=True)

valid_extensions = (".jpg", ".jpeg", ".png", ".bmp", ".gif", ".webp")

for filename in os.listdir(input_folder):
    if not filename.lower().endswith(valid_extensions):
        continue

    input_path = os.path.join(input_folder, filename)
    
    # Set new filename to .jpg
    file_root, _ = os.path.splitext(filename)
    output_path = os.path.join(output_folder, file_root + ".jpg")

    try:
        with Image.open(input_path) as img:
            # 1. Determine orientation and set target size
            if img.width >= img.height:
                target_size = landscape_size
            else:
                target_size = portrait_size

            # 2. Resize and Center Crop using ImageOps.fit
            # This method automatically resizes preserving aspect ratio, 
            # then crops the center to fit the exact size requested.
            final_img = ImageOps.fit(img, target_size, method=Image.LANCZOS, centering=(0.5, 0.5))

            # 3. Convert to RGB (in case of transparency)
            if final_img.mode in ("RGBA", "P"):
                final_img = final_img.convert("RGB")

            # 4. Save
            final_img.save(output_path, "JPEG", quality=jpg_quality)

            print(f"✅ Cropped & Saved {file_root}.jpg → {target_size}")

    except Exception as e:
        print(f"❌ Error processing {filename}: {e}")

print("\n🎉 Done! Images cropped, resized, and saved to:", output_folder)