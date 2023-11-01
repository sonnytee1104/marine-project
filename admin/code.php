<?php
include('authentication.php');

// Pictures delete
if(isset($_POST['img_delete']))
{
    $pic_id = sanitize($_POST['img_delete']);
    $sqlstr = "DELETE from pictures WHERE id=$pic_id";
    $result = $conn->query($sqlstr);
    if($result)
    {
        $_SESSION['message'] = 'Deleted Succesfully';
        header("Location: img-view.php");
        exit();
    } 
    else 
    {
        die(mysqli_error($conn));
    }
    
}



// Pictures edit
if(isset($_POST['img_edit']))
{
    $category_id = sanitize($_POST['category']);
    $img = $_FILES['image'];
    $pic_id = sanitize($_POST['pic_id']);
    $upload_success = true;
    if (!empty($img['name']))
    {
        $img_name = $img['name'];
        $tmp_name = $img['tmp_name'];
        $img_error = $img['error'];
        $img_size = $img['size'];
            
        if ($img_error === 0 && $img_size > 0 && $img_size < 3 * 1024 * 1024) 
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'jfif');

            if (in_array($img_ex_lc, $allowed_exs)) 
            {
                $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                
                // Path for Laptop
                $img_upload_path = $_SERVER['DOCUMENT_ROOT'] . '\marine-project\assets\pictures/' . $new_img_name;

                $sqlstr = "UPDATE pictures SET img_path = ?, cate_id = ? WHERE id = $pic_id";
                $stmt = $conn->prepare($sqlstr);
                $stmt->bind_param("si", $new_img_name, $category_id);
                $stmt->execute();
                $result = $stmt->affected_rows;

                if (!$result) 
                {
                    $upload_success = false;
                    $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
                    header("Location: img-edit?id=$pic_id.php");
                    exit();
                }
                
                move_uploaded_file($tmp_name, $img_upload_path);
            }
        }
        else 
        {
            $upload_success = false;
        }
    }
    else 
    {
        $sqlstr = "UPDATE pictures SET cate_id = ? WHERE id = $pic_id";
        $stmt = $conn->prepare($sqlstr);
        $stmt->bind_param("i", $category_id);
        $stmt->execute();
        $result = $stmt->affected_rows;
        if($result == 0)
        {
            $upload_success = false;
        }
    }
    if (!$upload_success) 
    {
        $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
        header("Location: img-edit.php?id=$pic_id");
        exit();
    }
    else
    {
        $_SESSION['message'] = 'Picture updated successfully!';
        header("Location: img-view.php");
        exit();
    }
    
    
}


// Pictures add
if(isset($_POST['img_add']))
{   
    $category_id = sanitize($_POST['category']);
    $img = $_FILES['image'];
    if (!empty($img['name']))
    {
        $img_name = $img['name'];
        $tmp_name = $img['tmp_name'];
        $img_error = $img['error'];
        $img_size = $img['size'];
        $upload_success = true;
            
        if ($img_error === 0 && $img_size > 0 && $img_size < 3 * 1024 * 1024) 
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'jfif');

            if (in_array($img_ex_lc, $allowed_exs)) 
            {
                $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                
                // Path for Laptop
                $img_upload_path = $_SERVER['DOCUMENT_ROOT'] . '\marine-project\assets\pictures/' . $new_img_name;

                $sqlstr = "INSERT INTO pictures(img_path, cate_id) VALUES (?, ?)";
                $stmt = $conn->prepare($sqlstr);
                $stmt->bind_param("si", $new_img_name, $category_id);
                $stmt->execute();
                $result = $stmt->affected_rows;

                if (!$result) 
                {
                    $upload_success = false;
                    $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
                    header("Location: img-add.php");
                    exit();
                }
                
                move_uploaded_file($tmp_name, $img_upload_path);
                $_SESSION['message'] = 'Picture added successfully!';
                header("Location: img-view.php");
                exit();
            }
        }
        else 
        {
            $upload_success = false;
        }
    }
    else 
    {
        $upload_success = false;
    }
    if (!$upload_success) 
    {
        $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
        header("Location: img-add.php");
        exit();
    }
    
    
}


//location delete
if(isset($_POST['location_delete']))
{
    $loca_id = sanitize($_POST['location_delete']);
    $sqlstr = "DELETE from location WHERE id=$loca_id";
    $result = $conn->query($sqlstr);
    if($result)
    {
        $_SESSION['message'] = 'Deleted Succesfully';
        header("Location: location-view.php");
        exit();
    } 
    else 
    {
        die(mysqli_error($conn));
    }
}


// Location edit
if(isset($_POST['location_update']))
{
    $loca_id = sanitize($_POST['loca_id']);
    $location = sanitize($_POST['loca_name']);  
    if($location == '')
    {
        $_SESSION['message'] = "Location name must be filled";
        header('location-edit?id='.$loca_id.'.php');
        exit();
    }
    $sqlstr = "UPDATE location SET places = ? WHERE id = $loca_id";
    $stmt = $conn->prepare($sqlstr);
    $stmt->bind_param("s", $location);
    $stmt->execute();
    $result = $stmt->affected_rows;
    if ($result) 
    {
        $_SESSION['message'] = "Location updated Successfully";
        header('location: location-view.php');
        exit();
    } 
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header('location: location-edit?id='.$loca_id.'.php');
        exit();
    
    }
}


// Location add
if(isset($_POST['location_add']))
{
    $location = sanitize($_POST['loca_name']);
    if($location == '')
    {
        $_SESSION['message'] = "Location name must be filled";
        header('location: location-add.php');
        exit();
    }
    $sqlstr = "INSERT INTO location (places) VALUES (?)";
    $stmt = $conn->prepare($sqlstr);
    $stmt->bind_param("s", $location);
    $stmt->execute();
    $result = $stmt->affected_rows;
    if ($result) 
    {
        $_SESSION['message'] = "Location added Successfully";
        header('location: location-view.php');
        exit();
    } 
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header('location: location-view.php');
        exit();
    
    } 
}


// Post edit 
if(isset($_POST['post_edit']))
{
    $category_id = sanitize($_POST['category']);
    $location_id = sanitize($_POST['location']);
    $animal_name = sanitize($_POST['aname']);
    $description = sanitize($_POST['description']);
    $post_id = sanitize($_POST['post_id']);

    $conn->begin_transaction();
    try
    {
        $animal_update_query = "UPDATE animals SET category = ?, animal_name = ?, description = ?, location_id = ? WHERE id = $post_id";
        $stmt = $conn->prepare($animal_update_query);
        $stmt->bind_param("issi", $category_id, $animal_name, $description, $location_id);
        $stmt->execute();

        // Get the id of animals
        $animal_id = $post_id;
        $upload_success = true;

        // Insert the images into pictures animals
        if (isset($_FILES["images"])) 
        {
            $imgs = $_FILES["images"];
            $num_of_imgs = count($imgs['name']);
            $img_size = $imgs['size'][0];
            if ($img_size !== 0)
            {
                // Delete old pictures
                
                $gallery_delete_query = "DELETE FROM animal_gallery WHERE animal_id = ?";
                $stmt = $conn->prepare($gallery_delete_query);
                $stmt->bind_param("i", $animal_id);
                $stmt->execute();

                for ($i = 0; $i < $num_of_imgs; $i++) 
                {
                    $img_name = $imgs['name'][$i];
                    $tmp_name = $imgs['tmp_name'][$i];
                    $img_error = $imgs['error'][$i];
                    $img_size = $imgs['size'][$i];

                    if ($img_error === 0 && $img_size > 0 && $img_size < 3 * 1024 * 1024) 
                    {
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                        $img_ex_lc = strtolower($img_ex);
                        $allowed_exs = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'jfif');

                        if (in_array($img_ex_lc, $allowed_exs)) 
                        {
                            $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                            
                            // Path for img store
                            $img_upload_path = $_SERVER['DOCUMENT_ROOT'] . '\marine-project\assets\pictures/' . $new_img_name;

                            $sqlstr = "INSERT INTO pictures(img_path, cate_id) VALUES (?, ?)";
                            $stmt = $conn->prepare($sqlstr);
                            $stmt->bind_param("si", $new_img_name, $category_id);
                            $stmt->execute();
                            $result = $stmt->affected_rows;
                            $picture_id = $stmt->insert_id;

                            if (!$result) 
                            {
                                $upload_success == false;
                            }

                            move_uploaded_file($tmp_name, $img_upload_path);   
                            // Insert into animal_gallery table
                            $gallery_insert_query = "INSERT INTO animal_gallery (animal_id, picture_id) VALUES (?, ?)";
                            $stmt = $conn->prepare($gallery_insert_query);
                            $stmt->bind_param("ii", $animal_id, $picture_id);
                            $stmt->execute();
                        } 
                        else 
                        {
                            $upload_success == false;
                        }
                    } 
                    else 
                    {
                        $upload_success == false;
                    }
                }
            }
            
        }

        if (!$upload_success) 
        {
            $conn->rollBack();
            $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
            header("Location: post-edit?id=$post_id.php");
            exit();
        }

        $conn->commit();
        $_SESSION['message'] = 'Post updated successfully!';
        header("Location: post-view.php");
        exit();

    }
    catch (Exception $e) 
    {
        $conn->rollBack();
        $upload_success = false;
        $_SESSION['message'] = "Error: " . $e->getMessage();
        header("Location: post-add.php");
        exit();
    }
}


// Post Delete
if(isset($_POST['post_delete']))
{
    $id = sanitize($_POST['post_delete']);

    $conn -> begin_transaction();
    try
    {
        $error = 0;
        $sqlstr_pic = "DELETE from animal_gallery WHERE animal_id = $id";
        $result = $conn->query($sqlstr_pic);
        if(!$result)
        {
         $error++;
        } 
        $sqlstr_animal = "DELETE from animals WHERE id = $id";
        $result = $conn->query($sqlstr_animal);
        if(!$result)
        {
         $error++;
        } 
        if($error > 0)
        {
            $conn->rollBack();
            $_SESSION['message'] = 'Error deleting post';
            header("Location: post-view.php");
            exit();
        }

        $conn->commit();
        $_SESSION['message'] = 'Deleted Succesfully';
        header("Location: post-view.php");
        exit();
    }
    catch (Exception $e) 
    {
        $conn->rollBack();
        $_SESSION['message'] = "Error: " . $e->getMessage();
        header("Location: post-view.php");
        exit();
    } 
}


// Post Add
if(isset($_POST['post_add'])) 
{
    $category_id = sanitize($_POST['category']);
    $location_id = sanitize($_POST['location']);
    $animal_name = sanitize($_POST['aname']);
    $description = sanitize($_POST['description']);

    $conn->begin_transaction();

    try 
    {
        // Insert into animal table
        $animal_insert_query = "INSERT INTO animals (category, animal_name, description, location_id) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($animal_insert_query);
        $stmt->bind_param("isss", $category_id, $animal_name, $description, $location_id);
        $stmt->execute();

        // Get the inserted id of animals
        $animal_id = $stmt->insert_id;
        $upload_success = true;

        // Insert the images into pictures animals
        if (isset($_FILES["images"])) 
        {
            $imgs = $_FILES["images"];
            $num_of_imgs = count($imgs['name']);

            for ($i = 0; $i < $num_of_imgs; $i++) 
            {
                $img_name = $imgs['name'][$i];
                $tmp_name = $imgs['tmp_name'][$i];
                $img_error = $imgs['error'][$i];
                $img_size = $imgs['size'][$i];

                if ($img_error === 0 && $img_size > 0 && $img_size < 3 * 1024 * 1024) 
                {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $allowed_exs = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'jfif');

                    if (in_array($img_ex_lc, $allowed_exs)) 
                    {
                        $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                        
                        // Path for Laptop
                        $img_upload_path = $_SERVER['DOCUMENT_ROOT'] . '\marine-project\assets\pictures/' . $new_img_name;
                        // Path for PC
                        //$img_upload_path = 'F:\Xampp\htdocs\marine-project\assets\pictures/' . $new_img_name;

                        $sqlstr = "INSERT INTO pictures(img_path, cate_id) VALUES (?, ?)";
                        $stmt = $conn->prepare($sqlstr);
                        $stmt->bind_param("si", $new_img_name, $category_id);
                        $stmt->execute();
                        $result = $stmt->affected_rows;
                        $picture_id = $stmt->insert_id;

                        if (!$result) 
                        {
                            $upload_success = false;
                        }
                        
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into animal_gallery table
                        $gallery_insert_query = "INSERT INTO animal_gallery (animal_id, picture_id) VALUES (?, ?)";
                        $stmt = $conn->prepare($gallery_insert_query);
                        $stmt->bind_param("ii", $animal_id, $picture_id);
                        $stmt->execute();
                    } 
                    else 
                    {
                        $upload_success = false;
                    }
                } 
                else 
                {
                    $upload_success = false;
                }
            }
        }

        if (!$upload_success) 
        {
            $conn->rollBack();
            $_SESSION['message'] = 'Ops! Something went wrong while uploading images';
            header("Location: post-add.php");
            exit();
        }

        $conn->commit();
        $_SESSION['message'] = 'Post added successfully!';
        header("Location: post-view.php");
        exit();
    } 
    catch (Exception $e) 
    {
        $conn->rollBack();
        $upload_success = false;
        $_SESSION['message'] = "Error: " . $e->getMessage();
        header("Location: post-add.php");
        exit();
    }
}



// Cate Delete
if(isset($_POST['cate_delete']))
{
    $id = $_POST['cate_delete'];

    $sqlstr = "DELETE from categories WHERE id=$id";
    $result = $conn->query($sqlstr);
    if($result)
    {
        $_SESSION['message'] = 'Deleted Succesfully';
        header("Location: category-view.php");
        exit();
        
    } 
    else 
    {
        die(mysqli_error($conn));
    }
}


// Cate update
if(isset($_POST['category_update']))
{   
    $id = sanitize($_POST['cate_id']);
    $name = sanitize($_POST['name']);
    $description = sanitize($_POST['description']);
    $sqlstr = "UPDATE categories SET cate_name = ?, description = ?  WHERE id = '$id'";
    $stmt = $conn->prepare($sqlstr);
    $stmt->bind_param("ss", $name, $description);
    $stmt->execute();
    $result = $stmt->affected_rows;
    if ($result) 
    {
        $_SESSION['message'] = "Update Successfully";
        header('location: category-view.php');
        exit();
    } 
    else 
    {
        $_SESSION['message'] = "Something went wrong";
        header('location: category-edit.php?id='.$id.'.php');
        exit();
    
    } 

}


// Adding new Cate
if(isset($_POST['category_add']))
{
    $name = sanitize($_POST['name']);
    $description = sanitize($_POST['description']);
    if($name == '') 
    {
        $_SESSION['message'] = 'Please fill in all the required fields.';
        header("Location: category-add.php");
        exit();
    }
    else
    {
        $sqlstr = "INSERT INTO categories(cate_name, description) VALUES (?, ?)";
        $stmt = $conn->prepare($sqlstr);
        $stmt->bind_param("ss", $name, $description);
        $stmt->execute();
        $result = $stmt->affected_rows;
        if ($result) {
            $_SESSION['message'] = "Category Added Succesfully";
            header('location: category-view.php');
            exit();
        } 
        else 
        {
            $_SESSION['message'] = "Error: " . $conn->error;
            header('location: category-add.php');
            exit();
        }
    }
}



// Delete user
if(isset($_POST['user_delete']))
{
    $id = $_POST['user_delete'];

    $sqlstr = "DELETE from user WHERE id=$id";
    $result = $conn->query($sqlstr);
    if($result)
    {
        $_SESSION['message'] = 'Deleted Succesfully';
        header("Location: view-register.php");
        exit();
        
    } 
    else 
    {
        die(mysqli_error($conn));
    }
}


// Adding new user
if (isset($_POST['add_user'])) 
{
    $name = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $password_confirm = sanitize($_POST['cpassword']);
    $hashed_pass = sha1($password);
    $role_as = sanitize($_POST['role_as']);

    if($name == '' || $email == '' || $password == '' || $hashed_pass == '' || $role_as == '') 
    {
        $_SESSION['message'] = 'Please fill in all the required fields.';
        header("Location: register-add.php");
        exit();
    }
    else
    {
        // Check if the password and password confirmation match
        if ($password === $password_confirm && $password !== '') 
        {
            // Check username exists
            $checkname = "SELECT * FROM user WHERE username = ?";
            $stmtCheck = $conn->prepare($checkname);
            $stmtCheck->bind_param("s", $name);
            $stmtCheck->execute();
            $checkname_run = $stmtCheck->get_result();

            if($checkname_run->num_rows > 0) {
                $stmtCheck->close();
                $_SESSION['message'] = 'Username already exists';
                header("Location: register-add.php");
                exit();
            }
            else 
            {
                $stmtCheck->close();
                $sqlstr = "INSERT INTO user(username, password, email, role_as) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sqlstr);
                $stmt->bind_param("sssi", $name, $hashed_pass, $email, $role_as);
                $stmt->execute();
                $result = $stmt->affected_rows;
                if ($result) {
                    $_SESSION['message'] = "Registered Successfully";
                    header('location: view-register.php');
                    exit();
                } 
                else 
                {
                    $_SESSION['message'] = "Error: " . $conn->error;
                    header('location: register-add.php');
                    exit();
                }
            }
            
        } 
        else 
        {
            $_SESSION['message'] = 'Password and Confirm Password does not match';
            header("Location: register-add.php");
            exit();
        }
    }

}



// Update user already exists
if (isset($_POST['update_user'])) 
{
    $name = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $password_confirm = sanitize($_POST['cpassword']);
    $hashed_pass = sha1($password);
    $id = sanitize($_POST['userid']);
    $role_as = sanitize($_POST['role_as']);

    // Check if the password and password confirmation match
    if ($password === $password_confirm && $password !== '') 
    {
        $sqlstr = $sqlstr = "UPDATE user SET username = ?, password = ?, email = ?, role_as = ?  WHERE id = '$id'";
        $stmt = $conn->prepare($sqlstr);
        $stmt->bind_param("sssi", $name, $hashed_pass, $email, $role_as);
        $stmt->execute();
        $result = $stmt->affected_rows;
        if ($result) {
            $_SESSION['message'] = "Update Successfully";
            header('location: view-register.php');
            exit();
        } 
        else 
        {
            $_SESSION['message'] = "Error: " . $conn->error;
            header('location: register-edit.php?id='.$id.'.php');
            exit();
        
        } 
    }    
    elseif ($password == "" && $password_confirm == "")
    {
        $sqlstr = $sqlstr = "UPDATE user SET username = ?, email = ?, role_as = ?  WHERE id = '$id'";
            $stmt = $conn->prepare($sqlstr);
            $stmt->bind_param("ssi", $name, $email, $role_as);
            $stmt->execute();
            $result = $stmt->affected_rows;
            if ($result) {
                $_SESSION['message'] = "Update Successfully";
                header('location: view-register.php');
                exit();
            } 
            else 
            {
                $_SESSION['message'] = "Error: " . $conn->error;
                header('location: register-edit.php?id='.$id.'.php');
                exit();
            }
    }
    else 
    {
        $_SESSION['message'] = 'Password and Confirm Password does not match';
        header('location: register-edit.php?id='.$id.'.php');
        exit();
    }
}

$_SESSION['message'] = 'Access denied';
header('location: index.php');
exit();