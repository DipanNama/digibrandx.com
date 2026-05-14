<section class="sub-services-sec" style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($subServices as $service): ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                <div class="service-card text-center p-4 h-100" style="background: var(--white); border: 1px solid var(--border-light); border-radius: 12px; transition: 0.3s;">
                    <div class="service-icon mb-3" style="font-size: 3rem; color: var(--primary-purple);">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 15px;"><?php echo $service['title']; ?></h3>
                    <p class="text-muted mb-4"><?php echo $service['description']; ?></p>
                    <a href="<?php echo $base_path; ?>contact.php" class="need-btn" style="width: 100%; justify-content: center;">Get Started</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    border-color: var(--primary-purple) !important;
}
.service-card h3 {
    color: var(--black);
}
</style>
