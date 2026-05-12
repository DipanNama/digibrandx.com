import os
import re

for file in os.listdir('.'):
    if file.endswith('.html') and file != 'theme.html':
        with open(file, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
        
        # Remove any existing theme.css link
        content = re.sub(r'\s*<link[^>]+theme\.css[^>]+>', '', content)
        
        # Insert as first link in head
        if '<head>' in content:
            new_content = content.replace('<head>', '<head>\n    <link rel="stylesheet" href="theme.css">', 1)
            with open(file, 'w', encoding='utf-8') as f:
                f.write(new_content)
