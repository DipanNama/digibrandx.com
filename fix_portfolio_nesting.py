import os
import re

file_path = 'portfolio.html'

with open(file_path, 'r', encoding='utf-8') as f:
    content = f.read()

# First, remove the buggy "All" section content to get a clean start
# We'll find all category sections and extract cards from them.
item_ids = ['div39', 'div19', 'div20', 'div107', 'div22', 'div21']
all_items = []
seen_hrefs = set()

# Add the "Brief Info" card manually as it's special and was in the "All" section
brief_info_card = '''                <div class="col-lg-4">
                  <div class="portfolio-card">
                    <a href="portfolio-Brief-Info.html">
                      <div class="port-img"><img src="" alt="" class="active img-fluid"></div>
                    </a>
                    <div class="port-content">
                      <h5>Brief Info</h5>
                      <p>
                      <p>BS Digital Solutions Portfolio: Creative Excellence, Proven Results.</p>
                      </p>
                    </div>
                  </div>
                </div>'''
all_items.append(brief_info_card)
seen_hrefs.add('portfolio-Brief-Info.html')

for div_id in item_ids:
    # Find the section content
    section_match = re.search(rf'<div id="{div_id}" class="tabcontent">(.*?)</div>\s*</div>', content, re.DOTALL)
    if section_match:
        section_content = section_match.group(1)
        # Find all cards in this section
        # Each card starts with <div class="col-lg-4"> and ends with 3 closing divs
        cards = re.findall(r'<div class="col-lg-4">.*?<div class="portfolio-card">.*?</div>\s*</div>\s*</div>', section_content, re.DOTALL)
        for card in cards:
            href_match = re.search(r'href="([^"]+)"', card)
            if href_match:
                href = href_match.group(1)
                if href not in seen_hrefs:
                    all_items.append(card)
                    seen_hrefs.add(href)

print(f"Found {len(all_items)} unique portfolio items.")

# Rebuild the "All" section HTML
all_items_html = "\n".join(all_items)

new_all_section = f'''          <div id="all_show_default" class="tabcontent" style="display: block;">
            <div class="row">
              <div class="row">
{all_items_html}
              </div>
            </div>
          </div>'''

# Replace the entire buggy all_show_default section
# Boundary is the start of the next tabcontent (div39)
boundary = '<div id="div39" class="tabcontent">'
pattern = r'<div id="all_show_default" class="tabcontent" style="display: block;">.*?' + re.escape(boundary)
replacement = new_all_section + '\n\n          ' + boundary

if re.search(pattern, content, re.DOTALL):
    content = re.sub(pattern, replacement, content, flags=re.DOTALL)
else:
    print("Warning: Could not find the specific boundary for replacement. Trying fallback.")
    content = re.sub(r'<div id="all_show_default" class="tabcontent" style="display: block;">.*?</div>\s*</div>\s*</div>', new_all_section, content, flags=re.DOTALL)

with open(file_path, 'w', encoding='utf-8') as f:
    f.write(content)

print(f"Fixed {file_path} successfully.")
