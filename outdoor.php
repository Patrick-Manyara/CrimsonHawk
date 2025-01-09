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
<div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/bg_5.png);background-position: top;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1 style="color:white;"><?php echo isset($title) ? $title : 'Service Not Found'; ?></h1>
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
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our Billboards</h2>
                    
                </div>
            </div>
        </div>
        <div>
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck1.png">
                        <img src="assets/img/ck1.png" alt="Cinque Terre" width="600" height="400">
                    </a>
                    
                </div>
            </div>


            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck2.png">
                        <img src="assets/img/ck2.png" alt="Forest" width="600" height="400">
                    </a>
                    
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck3.png">
                        <img src="assets/img/ck3.png" alt="Northern Lights" width="600" height="400">
                    </a>
                    
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck4.png">
                        <img src="assets/img/ck4.png" alt="Mountains" width="600" height="400">
                    </a>
                    
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck5.png">
                        <img src="assets/img/ck5.png" alt="Mountains" width="600" height="400">
                    </a>
                    
                </div>
            </div>


            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck6.png">
                        <img src="assets/img/ck6.png" alt="Mountains" width="600" height="400">
                    </a>
                    
                </div>
            </div>


            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="assets/img/ck7.png">
                        <img src="assets/img/ck7.png" alt="Mountains" width="600" height="400">
                    </a>
                    
                </div>
            </div>


        </div>
        <div class="row">
            <div class="blog-items">
                <div class="blog-content col-md-12"  style="margin-top:20px">
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
        font-size: 1em;
    }

    ol {
        color: black;
        font-size: 1em;
    }

    div.gallery {
        border: 1px solid #ccc;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }


    * {
        box-sizing: border-box;
    }

    .responsive {
        /* padding: 0 6px; */
        float: left;
        width: 25%;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }
</style>
<!-- End Blog -->
<?php include_once 'footer.php'; ?>