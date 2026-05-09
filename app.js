/**
 * DigiBrandX Dynamic Content Loader
 * Fetches content.json and injects data into elements with data-content-key or data-link-key attributes.
 */

const DynamicLoader = {
    contentPath: 'content.json',
    data: null,

    init() {
        document.addEventListener('DOMContentLoaded', () => this.loadData());
    },

    async loadData() {
        try {
            const response = await fetch(this.contentPath);
            if (!response.ok) throw new Error(`Failed to load ${this.contentPath}`);
            this.data = await response.json();
            
            this.render();
            this.setActiveLink();
            console.log('DigiBrandX dynamic content loaded successfully.');
        } catch (error) {
            console.error('Loader Error:', error);
        }
    },

    render() {
        if (!this.data) return;

        // 1. Inject Text and Media Content
        document.querySelectorAll('[data-content-key]').forEach(el => {
            const key = el.getAttribute('data-content-key');
            const value = this.getValue(key);
            
            if (value !== undefined && value !== null) {
                this.applyValue(el, value);
            }
        });

        // 2. Inject Navigation Links
        document.querySelectorAll('[data-link-key]').forEach(el => {
            const key = el.getAttribute('data-link-key');
            const url = this.data.links ? this.data.links[key] : null;
            
            if (url) {
                console.log(`Setting link ${key} to ${url}`);
                el.href = url;
            }
        });
    },

    /**
     * Sets the 'active' class on the current page's navigation link
     */
    setActiveLink() {
        const currentPath = window.location.pathname.split('/').pop() || 'index.html';
        document.querySelectorAll('.nav-link').forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPath) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    },

    getValue(path) {
        return path.split('.').reduce((obj, key) => (obj && obj[key] !== undefined) ? obj[key] : undefined, this.data);
    },

    applyValue(el, value) {
        switch (el.tagName) {
            case 'IMG':
                el.src = value;
                break;
            case 'A':
                el.href = value;
                break;
            case 'INPUT':
            case 'TEXTAREA':
                el.value = value;
                break;
            default:
                // Use innerHTML to support HTML tags from JSON (like <span> or <strong>)
                el.innerHTML = value;
        }
    }
};

DynamicLoader.init();
