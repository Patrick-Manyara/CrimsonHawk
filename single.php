<?php
$jsonFile = 'blogs.json'; // The path to your JSON file
$postFound = false;
$postData = null;
$errorMessage = '';
$currentId = 0;

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
            foreach ($data as $index => $post) {
                if (strcasecmp($post['id'], $requestedId) == 0) {
                    $postFound = true;
                    $postData = $post;
                    $currentId = $index + 1; // Store the index + 1 to match the ID (1-based)
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

    // Calculate the next and previous post IDs
    $previousId = $currentId - 1;
    $nextId = $currentId + 1;
    $maxId = 20;
}

include_once 'header.php'; ?>
<!-- Start Breadcrumb  -->
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/blog<?= $requestedId ?>.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="blogs.php">Blogs</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog  -->
<div class="blog-area single full-blog left-sidebar full-blog default-padding">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-8">
                    <div class="item">


                        <div class="info">

                            <div class="title">
                                <h3>
                                    <?= $title ?>
                                </h3>
                            </div>

                            <?= $content ?>

                            <!-- Start Post Pagination -->
                            <div class="post-pagi-area">
                                <!-- Previous Post Link -->
                                <?php if ($currentId == 1): ?>
                                    <span><i class="fas fa-angle-double-left"></i> Previous Post</span> <!-- Disabled for first post -->
                                <?php else: ?>
                                    <a href="single.php?id=<?php echo $previousId; ?>"><i class="fas fa-angle-double-left"></i> Previous Post</a>
                                <?php endif; ?>

                                <!-- Next Post Link -->
                                <?php if ($currentId == $maxId): ?>
                                    <span>Next Post <i class="fas fa-angle-double-right"></i></span> <!-- Disabled for last post -->
                                <?php else: ?>
                                    <a href="single.php?id=<?php echo $nextId; ?>">Next Post <i class="fas fa-angle-double-right"></i></a>
                                <?php endif; ?>
                            </div>
                            <!-- End Post Pagination -->


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

                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="info">
                                        <a href="single.php?id=1">What Is Digital Marketing and Why Does It Matter?</a>
                                        <div class="meta-title">
                                            <span class="post-date">23 Dec, 2024</span> </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <a href="single.php?id=2">How Can Social Media Help My Business Grow?</a>
                                        <div class="meta-title">
                                            <span class="post-date">23 Nov, 2024</span> </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <a href="single.php?id=3">What's the Difference Between SEO and PPC?</a>
                                        <div class="meta-title">
                                            <span class="post-date">23 Oc, 2024</span> </a>
                                        </div>
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
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

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

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #EF7504;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    td {
        font-size: 14px;
        color: #555;
    }

    td,
    th {
        border-radius: 4px;
    }

    table {
        border-radius: 8px;
        overflow: hidden;
    }

    .HeadingTD {
        font-weight: 600;
    }
</style>

<?php include_once 'footer.php'; ?>