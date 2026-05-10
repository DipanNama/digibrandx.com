import os
import re
import requests
from urllib.parse import urljoin, urlparse

def get_assets():
    base_url = "https://bssoliution.dgcrafter.com/"
    asset_extensions = (
        '.png', '.jpg', '.jpeg', '.gif', '.svg', '.webp', '.ico',
        '.css', '.js',
        '.woff', '.woff2', '.ttf', '.otf', '.eot'
    )
    
    html_files = []
    for root, dirs, files in os.walk("."):
        for file in files:
            if file.endswith(".html"):
                html_files.append(os.path.join(root, file))
    
    found_urls = set()
    
    # Regex for src and href
    patterns = [
        r'src=["\']([^"\']+)["\']',
        r'href=["\']([^"\']+)["\']',
        r'url\(["\']?([^"\'\)]+)["\']?\)' # CSS background-image
    ]
    
    for file_path in html_files:
        try:
            with open(file_path, 'r', encoding='latin-1') as f:
                content = f.read()
            
            for pattern in patterns:
                matches = re.findall(pattern, content)
                for match in matches:
                    # Clean the match (remove any trailing query strings or hashes)
                    clean_match = match.split('?')[0].split('#')[0]
                    
                    if clean_match.lower().endswith(asset_extensions):
                        if clean_match.startswith('http'):
                            if 'BS Digital Solutions.com' in clean_match:
                                found_urls.add(clean_match)
                        elif not clean_match.startswith(('javascript:', 'mailto:', 'tel:', '#')):
                            # It's a relative path
                            full_url = urljoin(base_url, clean_match.lstrip('/'))
                            found_urls.add(full_url)
        except Exception as e:
            print(f"Error reading {file_path}: {e}")

    return found_urls

def download_assets(urls):
    base_url = "https://bssoliution.dgcrafter.com/"
    
    for url in sorted(urls):
        parsed = urlparse(url)
        # Reconstruct local path
        # If url is https://bssoliution.dgcrafter.com/css/style.css -> css/style.css
        path = parsed.path.lstrip('/')
        if not path: continue
        
        local_path = os.path.join(".", path.replace('/', os.sep))
        
        if os.path.exists(local_path):
            # print(f"Skipping (exists): {local_path}")
            continue
            
        print(f"Downloading: {url} -> {local_path}")
        
        try:
            os.makedirs(os.path.dirname(local_path), exist_ok=True)
            response = requests.get(url, timeout=10)
            if response.status_code == 200:
                with open(local_path, 'wb') as f:
                    f.write(response.content)
            else:
                print(f"Failed to download {url}: Status {response.status_code}")
        except Exception as e:
            print(f"Error downloading {url}: {e}")

if __name__ == "__main__":
    print("Scanning for assets...")
    urls = get_assets()
    print(f"Found {len(urls)} unique asset URLs.")
    print("Starting downloads...")
    download_assets(urls)
    print("Done!")
