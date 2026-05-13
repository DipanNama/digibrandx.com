import os
import re

file_path = 'portfolio.html'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# Find all correctly structured portfolio cards in the file.
# These will be the ones from the category sections (div39, div19, etc.)
# because the ones in 'all_show_default' are currently missing the final </div>
card_pattern = r'<div class="col-lg-4">.*?<div class="portfolio-card">.*?</div>\s*</div>\s*</div>'
cards = re.findall(card_pattern, content, re.DOTALL)

print(f"Found {len(cards)} correctly structured cards.")

# Deduplicate by href
seen_hrefs = set()
unique_cards = []
for card in cards:
    href_match = re.search(r'href="([^"]+)"', card)
    if href_match:
        href = href_match.group(1)
        if href not in seen_hrefs:
            unique_cards.append(card)
            seen_hrefs.add(href)

print(f"Found {len(unique_cards)} unique cards.")

# Rebuild the "All" section HTML
all_items_html = "\n".join(unique_cards)

new_all_section = f'''          <div id="all_show_default" class="tabcontent" style="display: block;">
            <div class="row">
              <div class="row">
{all_items_html}
              </div>
            </div>
          </div>'''

# Boundary is the start of the next tabcontent (div39)
boundary = '<div id="div39" class="tabcontent">'
pattern = r'<div id="all_show_default" class="tabcontent" style="display: block;">.*?' + re.escape(boundary)
replacement = new_all_section + '\n\n          ' + boundary

if re.search(pattern, content, re.DOTALL):
    content = re.sub(pattern, replacement, content, flags=re.DOTALL)
    with open(file_path, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Fixed {file_path} successfully.")
else:
    print("Error: Could not find the specific boundary for replacement.")
