<?php
$jsonFile = 'services.json'; // The path to your JSON file
$postFound = false;
$postData = null;
$errorMessage = '';

if (file_exists($jsonFile)) {
    // Step 1: Read and decode the JSON file
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);

    // Step 2: Check if JSON was successfully decoded
    if (json_last_error() === JSON_ERROR_NONE) {
        // Step 3: Get the 'id' parameter from the URL
        if (isset($_GET['id'])) {
            $requestedId = trim($_GET['id']); // Sanitize input

            // Step 4: Loop through the JSON data to find the matching 'id'
            foreach ($data as $post) {
                if (strcasecmp($post['key'], $requestedId) == 0) {
                    $postFound = true;
                    $postData = $post;
                    break;
                }
            }

            // If no match is found
            if (!$postFound) {
                $errorMessage = "Sorry, the requested content was not found.";
            }
        } else {
            $errorMessage = "No content specified. Please provide an 'id' in the URL.";
        }
    } else {
        $errorMessage = "Error decoding JSON: " . json_last_error_msg();
    }
} else {
    $errorMessage = "Content file not found.";
}

// Step 5: Display error message if no post was found
if ($errorMessage) {
    echo $errorMessage;
} else {
    // Step 6: Output the title and content dynamically
    $title = $postData['title'];
    $content = $postData['content'];
}
include_once 'header.php'; ?>
<!-- Start Breadcrumb  -->
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/22.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php echo isset($title) ? $title : 'Service Not Found'; ?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="index.php#services">Services</a></li>
                    <li class="active"><?php echo isset($title) ? $title : 'Not Found'; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <div class="item">
                        <div class="info">
                            <?php
                            if (isset($postData)) {
                                echo $content; // Output the content fetched from the JSON
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar col-md-4">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="title">
                                <h4>Search</h4>
                            </div>
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" class="form-control">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>Our Services</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="service.php?id=reels">Digital Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=social">Social Media Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=email">Email Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=whatsapp">WhatsApp Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=lead">Lead Generation</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=brand">Brand Development</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=sales">Sales Strategy</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=graphic">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=social">Content Creation</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=web#seo">SEO Services</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=lead#ppc">PPC Advertising</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Download:</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="info">
                                        <a href="assets/files/CHL_OFFICIAL_PROFILE.pdf">Enterprises Company Profile</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <a href="assets/files/CHL_SMALL_BUSINESS_PROFILE.pdf">Small Businesses Company Profile</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Reach Out To Us:</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <h5>Address</h5>
                                        <span>Fourth Parklands Avenue, Parklands Nairobi.</span>
                                    </li>
                                    <li>
                                        <h5>Phone</h5>
                                        <span>+254708864076</span>
                                    </li>
                                    <li>
                                        <h5>Email</h5>
                                        <span>marketing@crimsonhawkltd.co.ke</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/hawklimited/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://www.instagram.com/hawk.limited/"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="https://www.linkedin.com/company/crimson-hawk-limited/"><i class="fab fa-linkedin-in"></i></a>
                                    </li>

                                    <li class="twitter">
                                        <a href="https://x.com/HAWKLIMITED1"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="google">
                                        <a href="https://www.google.com/search?q=hawk+limited&oq=hawk+limited+&gs_lcrp=EgZjaHJvbWUyCggAEEUYFhgeGDkyCAgBEAAYFhgeMggIAhAAGBYYHjIOCAMQLhgWGB4YxwEY0QMyCAgEEAAYFhgeMgYIBRBFGDwyBggGEEUYPDIGCAcQRRg80gEINDM5MGowajeoAgCwAgA&sourceid=chrome&ie=UTF-8"><i class="fab fa-google"></i></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/@CrimsonHawkLimited"><i class="fab fa-youtube"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item tags">
                            <div class="title">
                                <h4>tags</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="service.php?id=reels">Digital Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=social">Social Media Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=email">Email Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=whatsapp">WhatsApp Marketing</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=lead">Lead Generation</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=brand">Brand Development</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=sales">Sales Strategy</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=graphic">Graphic Design</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=social">Content Creation</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=web#seo">SEO Services</a>
                                    </li>
                                    <li>
                                        <a href="service.php?id=lead#ppc">PPC Advertising</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>

<style>
    .info ul {
        list-style-type: disc;
    }

    .info ul li {
        color: #000000;
        font-size: 1.1em;
    }

    ol {
        color: black;
        font-size: 1.1em;
    }
</style>
<!-- End Blog -->
<?php include_once 'footer.php'; ?>