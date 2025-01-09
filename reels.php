<?php
require 'vendor/autoload.php'; // Include Composer's autoload file
// Load .env variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiKey = $_ENV['YOUTUBE_API_KEY'];
$channelId =$_ENV['YOUTUBE_CHANNEL_ID'];
$maxResults = $_ENV['MAX_RESULTS'];

// YouTube API URL to get videos
$url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&order=date&maxResults=$maxResults";

// Fetch videos
$response = file_get_contents($url);
$data = json_decode($response);


?>

<div class="portfolio-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Videos</h2>
                </div>
            </div>
        </div>
        <div class="portfolio-items-area text-center">
            <div class="row">
                <div class="col-md-12 portfolio-content">
                    <div class="mix-item-menu">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".featured">Featured Marketing Videos</button>
                        <button data-filter=".reels">Client Reels</button>
                        <button data-filter=".vids">New Videos</button>
                    </div>
                    <!-- End Mixitup Nav-->

                    <div class="row magnific-mix-gallery masonary ">
                        <div id="portfolio-grid" class="row">
                            <?php
                            if (isset($data->items)) {
                                foreach ($data->items as $video) {
                                    if (isset($video->id->videoId)) {
                                        $videoId = $video->id->videoId;
                                        // $videoTitle = $video->snippet->title;
                            ?>

                                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 featured reels">
                                            <div class="item-effect">

                                                <div class="youtube-short">
                                                    <iframe
                                                        width="100%"
                                                        height="500"
                                                        style="border-radius: 10px;"
                                                        src="https://youtube.com/embed/<?= $videoId ?>"
                                                        frameborder="0"
                                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen
                                                        loading="lazy">
                                                    </iframe>
                                                    <div class="CaptionArea">
                                                        <p>
                                                            <?= htmlspecialchars('', ENT_QUOTES, 'UTF-8') ?>
                                                        </p>
                                                        <img src="assets/img/rec.png" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                            <?php
                                    }
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Portfolio -->