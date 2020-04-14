<?php 
  
    include('config/db_connect.php');

    $email = $title = $ingredients = '';
    $errors = ['email'=>'', 'title'=>'', 'ingredients'=>''];

    if(isset($_POST['submit'])){
        
        // check email
        if(empty($_POST['email'])){
            $errors['email'] = 'An email is required <br>';
        }else{
            $email = htmlspecialchars($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address';
            }
        }
        
        // check title
        if(empty($_POST['title'])){
            $errors['title'] = 'A title is required <br>';
        }else{
            $title = htmlspecialchars($_POST['title']);
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'Title must be letters and spaces only';
            }
        }
        
        // check ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] =  'At least one ingredient is required <br>';
        }else{
            $ingredients = htmlspecialchars($_POST['ingredients']);
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                $errors['ingredients'] = 'Ingredients must be a comma separated list';
            }
        }

        if(array_filter($errors)){
            //errors in the form
        }else{
            //form is valid
            // TODO save data to DB
            header('Location: index.php');
        }
        
    } // end POST check

    
    
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <div class="input-field">
                <label for="email">Your Email</label>
                <input type="text" name="email" id="email" class="validate" value="<?php echo htmlspecialchars($email); ?>">
                <div class="red-text"><?php echo $errors['email']; ?></div>
            </div>
            <div class="input-field">
                <label for="title">Pizza title</label>
                <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($title); ?>">
                <div class="red-text"><?php echo $errors['title']; ?></div>
            </div>
            <div class="input-field">
                <label for="ingredients">Ingredients (comma separated)</label>
                <input type="text" name="ingredients" id="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
                <div class="red-text"><?php echo $errors['ingredients']; ?></div>
            </div>
            
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>

</html>