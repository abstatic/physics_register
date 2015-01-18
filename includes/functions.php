<?php
    /***********************************************************************
     * functions.php
     *
     * Helper functions.
     **********************************************************************/

    require_once("constants.php");

    /**
     * Apologizes to user with message.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
        exit;
    }

    /**
     * Facilitates debugging by dumping contents of variable
     * to browser.
     */
    function dump($variable)
    {
        require("../templates/dump.php");
        exit;
    }

    /**
     * Logs out current user, if any.  Based on Example #1 at
     * http://us.php.net/manual/en/function.session-destroy.php.
     */
    function logout()
    {
        // unset any session variables
        $_SESSION = array();

        // expire cookie
        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 42000);
        }

        // destroy session
        session_destroy();
    }

    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [])
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);
            
            // render header
            require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }

    /**
     * GetImageExtension function, return- the extension of image
     * @param $imagetype 
     */
    function GetImageExtension($imagetype)
    {
        if(empty($imagetype)) return false;

        switch($imagetype)
           {
               case 'image/bmp'  : return '.bmp';
               case 'image/gif'  : return '.gif';
               case 'image/jpeg' : return '.jpg';
               case 'image/pjpeg': return '.jpg';
               case 'image/png'  : return '.png';
               default           : return "dont know";
           }
    }

    function export_excel_csv()
    {
        $sql = "SELECT * FROM table";
        $rows = query($sql);

        $num_fields = count($rows[0]);
        
        for($i = 0; $i < $num_fields; $i++ )
        {
            $header .= mysql_field_name($rec,$i)."\\t";
        }
        
        while($row = mysql_fetch_row($rec))
        {
            $line = '';
            foreach($row as $value)
            {                                            
                if((!isset($value)) || ($value == ""))
                {
                    $value = "\\t";
                }
                else
                {
                    $value = str_replace( '"' , '""' , $value );
                    $value = '"' . $value . '"' . "\\t";
                }
                $line .= $value;
            }
            $data .= trim( $line ) . "\\n";
        }
        
        $data = str_replace("\\r" , "" , $data);
        
        if ($data == "")
        {
            $data = "\\n No Record Found!\n";                        
        }
        
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=reports.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        print "$header\\n$data";
    }

    function img_resize($tmpfileName) {
    /*
     * PHP GD
     * resize an image using GD library
     */
    // Content type
    //header('Content-Type: image/jpeg');

    $fileName = '../html/images/temp/'.$tmpfileName;
    // Get new sizes
    list($width, $height) = getimagesize($fileName);

    $newwidth  = 150;
    $newheight = 180;

    // Load
    // creates the canvas for resized image
    $thumb  = imagecreatetruecolor($newwidth, $newheight);


    // get the resource pointer.
    $source = imagecreatefromjpeg($fileName);

    
    
    // Resize
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    // Output and free memory
    $outputFileName = '../html/images/temp/'.$tmpfileName;
    imagejpeg($thumb, $outputFileName);
    
    }
?>
