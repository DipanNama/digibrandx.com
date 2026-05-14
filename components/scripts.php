<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="<?php echo $base_path; ?>js/custom.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.querySelectorAll('.custom-contact-select').forEach(selectBox => {
            const selected = selectBox.querySelector('.selected');
            const options = selectBox.querySelector('.options');
            const hiddenInput = selectBox.querySelector('input[type="hidden"]');
            const arrow = selected.querySelector('.arrow');

            selected.addEventListener('click', () => {
                document.querySelectorAll('.custom-contact-select .options').forEach(opt => {
                    if (opt !== options) opt.classList.remove('show');
                });
                document.querySelectorAll('.custom-contact-select .arrow').forEach(ar => {
                    if (ar !== arrow) ar.classList.remove('rotate');
                });
                options.classList.toggle('show');
                arrow.classList.toggle('rotate');
            });

            options.querySelectorAll('div').forEach(option => {
                option.addEventListener('click', () => {
                    selected.childNodes[0].textContent = option.textContent + ' ';
                    hiddenInput.value = option.getAttribute('data-value');
                    options.classList.remove('show');
                    arrow.classList.remove('rotate');
                });
            });

            document.addEventListener('click', e => {
                if (!selectBox.contains(e.target)) {
                    options.classList.remove('show');
                    arrow.classList.remove('rotate');
                }
            });
        });
    </script>
    <script>
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            const selected = dropdown.querySelector('.selected');
            const options = dropdown.querySelectorAll('.options div');
            const input = dropdown.querySelector('.dropdown-input');

            options.forEach(option => {
                option.addEventListener('click', () => {
                    selected.innerHTML = option.textContent + ' <span class="arrow"><i class="fas fa-angle-down"></i></span>';
                    input.value = option.getAttribute('data-value');
                });
            });
        });
    </script>
    <script>
        // Auto-select budget from URL
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const budget = urlParams.get('budget');
            if (budget) {
                const $selected = $('#budget-selected');
                const $input = $('#budget-input');
                if ($selected.length && $input.length) {
                    $selected.html(budget + ' <span class="arrow"><i class="fas fa-angle-down"></i></span>');
                    $input.val(budget);
                    
                    // Scroll to form
                    const formContainer = document.getElementById('enquiry-form-container');
                    if (formContainer) {
                        formContainer.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            }
        });
    </script>
