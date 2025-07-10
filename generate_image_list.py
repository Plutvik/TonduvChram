import os

# Folder to scan
folder = 'images'

# Allowed extensions
extensions = ('.jpg', '.jpeg', '.png', '.gif')

# Get list of image files in the folder
image_files = [f for f in os.listdir(folder) if f.lower().endswith(extensions)]

# Sort for consistency
image_files.sort()

# Build JS array string
js_lines = ["const images = ["]
for img in image_files:
    js_lines.append(f"    '{folder}/{img}',")
js_lines.append("  ];")

# Join all lines
js_code = '\n'.join(js_lines)

print(js_code)
