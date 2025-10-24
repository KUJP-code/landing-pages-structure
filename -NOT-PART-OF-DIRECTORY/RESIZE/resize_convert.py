from PIL import Image
import os

# Folders
input_folder = "/Users/MikeWork/Documents/images-pre" 
output_folder = "/Users/MikeWork/Documents/images-post" 
new_width = 242

os.makedirs(output_folder, exist_ok=True)

for filename in os.listdir(input_folder):
    if filename.lower().endswith(".png"):
        input_path = os.path.join(input_folder, filename)
        output_path = os.path.join(output_folder, os.path.splitext(filename)[0] + ".jpg")
        
        img = Image.open(input_path).convert("RGBA")
        
        # Calculate new height to maintain aspect ratio
        width_percent = new_width / float(img.width)
        new_height = int(img.height * width_percent)
        img = img.resize((new_width, new_height), Image.LANCZOS)
        
        # Sample colors
        top_middle_color = img.getpixel((new_width // 2, 0))[:3]
        bottom_middle_color = img.getpixel((new_width // 2, new_height - 1))[:3]
        
        # Create new background image
        background = Image.new("RGB", (new_width, new_height))
        
        # Fill top half with top color and bottom half with bottom color
        for y in range(new_height):
            for x in range(new_width):
                pixel_alpha = img.getpixel((x, y))[3] / 255  # alpha 0-1
                if pixel_alpha < 1:
                    color = top_middle_color if y < new_height // 2 else bottom_middle_color
                    background.putpixel((x, y), color)
                else:
                    background.putpixel((x, y), img.getpixel((x, y))[:3])
        
        # Save as JPG
        background.save(output_path, quality=95)
        print(f"Processed {filename} -> {output_path}")

print("All PNGs resized, converted, and corners filled successfully!")
