import os
from PIL import Image

# === SETTINGS ===
input_folder = "/Users/MikeWork/Documents/images-pre"       # Folder containing your original images
output_folder = "/Users/MikeWork/Documents/images-post"    # Folder to save resized images
landscape_size = (1024, 768)
portrait_size = (768, 1024)

# === CREATE OUTPUT FOLDER IF NOT EXISTS ===
os.makedirs(output_folder, exist_ok=True)

# === SUPPORTED FILE EXTENSIONS ===
valid_extensions = (".jpg", ".jpeg", ".png", ".bmp", ".gif", ".webp")

# === PROCESS EACH IMAGE ===
for filename in os.listdir(input_folder):
    if not filename.lower().endswith(valid_extensions):
        continue  # skip non-image files

    input_path = os.path.join(input_folder, filename)
    output_path = os.path.join(output_folder, filename)

    try:
        with Image.open(input_path) as img:
            width, height = img.size

            # Choose target size based on orientation
            if width >= height:
                target_size = landscape_size
            else:
                target_size = portrait_size

            # Resize and save
            resized_img = img.resize(target_size, Image.LANCZOS)
            resized_img.save(output_path)

            print(f"✅ Resized {filename} → {target_size}")
    except Exception as e:
        print(f"❌ Error processing {filename}: {e}")

print("\n🎉 Done! All images resized and saved in:", output_folder)
