<?php

class SiteSlide
{
    public $site_slides;
    private $connection;

    function __construct($conn)
    {
        $this->connection = $conn;
        $this->site_slides = array();

        $sql = "SELECT * FROM site_slides ORDER BY slide_order ASC";

        if ($result = $this->connection->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $this->site_slides[] = $row;
                }
            }
        }
    }

    public function fetchSlides()
    {
        $this->site_slides = array();
        
        $sql = "SELECT * FROM site_slides ORDER BY slide_order ASC";

        if ($result = $this->connection->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $this->site_slides[] = $row;
                }
            }
        }
    }

    public function addSlide($slide_title, $slide_img)
    {
        $sql = "INSERT INTO site_slides 
                (slide_title, slide_img)
                VALUES
                ('$slide_title', '$slide_img')";

        if ($this->connection->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function updateSlide($slide_id, $slide_title)
    {
        $sql = "UPDATE site_slides 
                SET slide_title = '$slide_title'
                WHERE slide_id = '$slide_id'";

        if ($this->connection->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSlide($slide_id)
    {
        $sql = "DELETE FROM site_slides 
                WHERE slide_id = '$slide_id'";

        if ($this->connection->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function changeSlideOrder($slide_id, $order)
    {
        $sql = "UPDATE site_slides SET slide_order = '$order' 
                WHERE slide_id = '$slide_id'";

        if ($this->connection->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function getSlideByID($slide_id)
    {

        $sql = "SELECT * FROM site_slides WHERE slide_id = '$slide_id'";

        if ($result = $this->connection->query($sql)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row;
            } 
        }
    }
}