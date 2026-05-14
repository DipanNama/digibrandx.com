import os
import re

def convert_html_to_php():
    html_files = [f for f in os.listdir('.') if f.endswith('.html')]
    
    if not os.path.exists('components'):
        os.makedirs('components')

    for html_file in html_files:
        if html_file in ['theme.html']:
            continue
            
        php_file = html_file.replace('.html', '.php')
        print(f"Converting {html_file} to {php_file}...")
        
        try:
            with open(html_file, 'r', encoding='utf-8') as f:
                content = f.read()
        except UnicodeDecodeError:
            with open(html_file, 'r', encoding='latin-1') as f:
                content = f.read()
            
        # Extract title and meta tags
        title_match = re.search(r'<title>(.*?)</title>', content, re.IGNORECASE | re.DOTALL)
        desc_match = re.search(r'<meta name="description" content="(.*?)"', content, re.IGNORECASE | re.DOTALL)
        key_match = re.search(r'<meta name="keywords" content="(.*?)"', content, re.IGNORECASE | re.DOTALL)
        
        pageTitle = (title_match.group(1) if title_match else "").strip().replace('"', '\\"')
        pageDescription = (desc_match.group(1) if desc_match else "").strip().replace('"', '\\"')
        pageKeywords = (key_match.group(1) if key_match else "").strip().replace('"', '\\"')
        
        # Identify main content
        # Try to find the end of the header/mega menu
        header_patterns = [
            r'<!-- mega menu js -->\s*<script>.*?</script>\s*<!-- ===== header sec end   ====== -->',
            r'<!-- ===== header sec end   ====== -->',
            r'</header>'
        ]
        
        start_index = 0
        for pattern in header_patterns:
            match = re.search(pattern, content, re.IGNORECASE | re.DOTALL)
            if match:
                start_index = match.end()
                break
        
        # Try to find the start of the footer
        footer_patterns = [
            r'<!-- ===== footer sec start ====== -->',
            r'<footer>'
        ]
        
        end_index = len(content)
        for pattern in footer_patterns:
            match = re.search(pattern, content, re.IGNORECASE)
            if match:
                end_index = match.start()
                break
        
        main_content = content[start_index:end_index].strip()
        
        # Remove comments
        main_content = re.sub(r'<!--.*?-->', '', main_content, flags=re.DOTALL)
        # Remove unnecessary whitespace
        main_content = re.sub(r'\n\s*\n', '\n', main_content)
        
        # Replace .html links with .php links
        # Look for href="something.html" but avoid external links (http/https)
        # We only want to replace local .html links
        main_content = re.sub(r'href="(?!http|https|#|javascript:)([^"]+)\.html"', r'href="\1.php"', main_content)
        
        # Construct PHP content
        php_content = f"""<?php
$pageTitle = "{pageTitle}";
$pageDescription = "{pageDescription}";
$pageKeywords = "{pageKeywords}";
include 'components/head.php';
include 'components/header.php';
?>

{main_content}

<?php 
include 'components/footer.php'; 
include 'components/scripts.php'; 
?>
"""
        with open(php_file, 'w', encoding='utf-8') as f:
            f.write(php_content)

if __name__ == "__main__":
    convert_html_to_php()
