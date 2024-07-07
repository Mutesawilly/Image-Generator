<?
include("All_In_One.php");
if (isset($_POST['genimage'])) {
    session_start(); // Ensure the session is started
    $input = json_decode(file_get_contents('php://input'), true);

    // Check if the input contains the 'imageUrl' field and it is not empty
    if (isset($input['imageUrl']) && !empty($input['imageUrl'])) {
        $imageUrl = $input['imageUrl'];
        $altText = isset($input['altText']) ? $input['altText'] : '';

        // Generate a unique name for the image to avoid overwriting
        $imagePath = 'genimages/' . uniqid() . basename($imageUrl);

        // Log the image URL and path for debugging
        error_log("Fetching image from URL: $imageUrl");
        error_log("Saving image to path: $imagePath");

        // Fetch the image from the URL
        $imageContent = file_get_contents($imageUrl);

        if ($imageContent !== false) {
            // Save the image to the local directory
            if (file_put_contents($imagePath, $imageContent)) {
                if (isset($_SESSION['id'])) {
                    $userId = $_SESSION['id'];
                    $genImage = "INSERT INTO `uploadedimages` (Image, IsGenerated, userId) VALUES ('$imagePath', True, '$userId')";
                    
                    // Log the SQL query for debugging
                    error_log("Executing SQL query: $genImage");

                    if (mysqli_query($connections, $genImage)) {
                        $response = ['message' => 'Image saved and database updated successfully.'];
                    } else {
                        $response = ['message' => 'Failed to insert into database: ' . mysqli_error($connections)];
                    }
                } else {
                    $response = ['message' => 'User ID not found in session.'];
                }
            } else {
                $response = ['message' => 'Failed to save the image locally.'];
            }
        } else {
            $response = ['message' => 'Failed to fetch the image from the URL.'];
        }
    } else {
        $response = ['message' => 'Invalid input.'];
    }

    echo json_encode($response);
}
?>
