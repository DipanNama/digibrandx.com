import os
import re

def update_includes(directory, depth):
    prefix = '../' * depth
    pattern = re.compile(r"include\s+(['\"])components/")
    replacement = f"include \\1{prefix}components/"
    
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith(".php"):
                path = os.path.join(root, file)
                with open(path, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                new_content = pattern.sub(replacement, content)
                
                if new_content != content:
                    with open(path, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                    print(f"Updated: {path}")

# 1 level deep
dirs_1 = ["page", "learn-service", "portfolio", "blog-details", "case-study-details"]
for d in dirs_1:
    if os.path.exists(d):
        update_includes(d, 1)

# 2 levels deep (in service-area)
service_area_subdirs = ["branding", "digital-marketing", "web-design", "web-development"]
for sd in service_area_subdirs:
    path = os.path.join("service-area", sd)
    if os.path.exists(path):
        update_includes(path, 2)
