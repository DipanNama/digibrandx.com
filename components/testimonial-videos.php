<section class="testimonial_videos_sec" style="padding: 50px 0; background: #000;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-heading text-center">
                    <div class="section-title" style="color:var(--accent-color);">Testimonials</div>
                </div>
                <div class="swiper video_testi_area">
                    <div class="swiper-wrapper">
                        <?php
                        $videoDir = __DIR__ . '/../images/testimonials/videos/';
                        $videos = glob($videoDir . "*.{mp4,webm,ogg,MP4,WEBM,OGG}", GLOB_BRACE);

                        if ($videos) {
                            foreach ($videos as $video) {
                                $fileName = basename($video);
                                $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
                                $mime = "video/" . $ext;
                                ?>
                                <div class="swiper-slide">
                                    <video controls class="img-fluid" style="border-radius: 10px; width: 100%;">
                                        <source src="<?php echo $base_path; ?>images/testimonials/videos/<?php echo rawurlencode($fileName); ?>" type="<?php echo $mime; ?>">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>