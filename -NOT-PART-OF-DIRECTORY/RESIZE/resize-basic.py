from PIL import Image
import os

# Folder containing PNGs
input_folder = "/Users/MikeWork/Documents/images-pre"
# Folder to save resized images
output_folder = "/Users/MikeWork/Documents/images-post"
# Desired width
new_width = 600

# Create output folder if it doesn't exist
os.makedirs(output_folder, exist_ok=True)

# Loop through all files in the input folder
for filename in os.listdir(input_folder):
    if filename.lower().endswith(".jpg"):
        input_path = os.path.join(input_folder, filename)
        output_path = os.path.join(output_folder, filename)
        
        # Open image
        img = Image.open(input_path)
        
        # Calculate new height to maintain aspect ratio
        width_percent = new_width / float(img.width)
        new_height = int(img.height * width_percent)
        
        # Resize image
        resized_img = img.resize((new_width, new_height), Image.LANCZOS)
        
        # Save resized image
        resized_img.save(output_path)
        print(f"Resized {filename} to {new_width}x{new_height}")

print("All PNGs resized successfully!")
