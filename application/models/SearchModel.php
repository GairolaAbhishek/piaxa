<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class SearchModel extends CI_Model {

	function get(){

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["searchTerm"])) {
    $apiKey = '38775867-b5a5995bd343935413f19dfbd';
    $searchTerm = urlencode($_POST["searchTerm"]);
    $url = "https://pixabay.com/api/?key=$apiKey&q=$searchTerm";

    // Initialize cURL session
    $ch = curl_init();
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Execute cURL session and retrieve response
    $response = curl_exec($ch);
    
    // Close cURL session
    curl_close($ch);

    $data = json_decode($response, true);

    if (isset($data["hits"])) {
        foreach ($data["hits"] as $image) {
            echo '<div>';
            echo '<img src="' . $image["webformatURL"] . '" alt="' . $image["tags"] . '">';
            echo '<a href="' . $image["largeImageURL"] . '" download>Download</a>';
            echo '</div>';
        }
    }
}




	}
}?>