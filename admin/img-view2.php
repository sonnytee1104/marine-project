<?php 
    include('authentication.php');
    if(isset($_POST['category'])) 
    {
        $selectedCategory = sanitize($_POST['category']);
        if ($selectedCategory !== '')
        {
            $sql_pic = "SELECT * FROM pictures WHERE cate_id = $selectedCategory";
            $result_pic = $conn->query($sql_pic);
            
            if ($result_pic) {
                $counter = 1;
                while ($row_pic = $result_pic->fetch_assoc()) {
                    $id = $row_pic['id'];
                    $category_id = $row_pic['cate_id'];
                    $img = $row_pic['img_path'];

                    // Get the categories name
                    $sqlstr = "SELECT cate_name FROM categories WHERE id = $category_id";
                    $result_cate = $conn->query($sqlstr); 
                    if(!$result_cate)
                    {
                        $_SESSION['message'] = "Ops! Can't not get the category";
                        header("Location: post-view.php");
                        exit();
                    }
                    $category = $result_cate->fetch_assoc()['cate_name'] ?? null;
                    
                    // Get images for the current animal
                    
                    echo '<tr>
                        <th scope="row">'.$counter.'</th>
                        <td>'.$category.'</td>
                        <td><img src="../assets/pictures/'.$img.'" alt="Animal Image" style="max-width: 100px; max-height: 100px;"></td>
                        <td>
                            <button class="btn btn-info"><a href="img-edit.php?id='.$id.'" class="text-light" >Edit</a></button>
                        </td>
                        <td>
                            <form action="code.php" method="post">
                                <button type="submit" class="btn btn-danger" name="animal_delete" value="'.$id.'">Delete</button>
                            </form>
                        </td>
                    </tr>';
            
                    $counter++;
                }
            
            } 
        }
        else 
        {
            echo '
            <tr>
                <td colspan="8">Please choose categories to show up pictures</td>
            </tr>
            ';
        }   
    } 
    
?>