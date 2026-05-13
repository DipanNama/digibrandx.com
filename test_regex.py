import re
with open('portfolio.html', 'r', encoding='utf-8') as f:
    content = f.read()

# Try to find one specific card to test regex
card_regex = re.compile(r'<div class="col-lg-4">\s*<div class="portfolio-card">.*?</div>\s*</div>\s*</div>\s*</div>', re.DOTALL)
matches = card_regex.findall(content)
print(f"Found {len(matches)} matches with 4 divs")

card_regex_3 = re.compile(r'<div class="col-lg-4">\s*<div class="portfolio-card">.*?</div>\s*</div>\s*</div>', re.DOTALL)
matches_3 = card_regex_3.findall(content)
print(f"Found {len(matches_3)} matches with 3 divs")
