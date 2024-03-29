<form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="input-field">
        <select name="title" id="title">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
        </select>
        <label for="title">Choose a title:</label>
    </div>
    <div class="input-field">
        <input type="text" name="firstName" id="firstName" value="<?php echo htmlspecialchars($firstName); ?>"/>
        <label for="firstName">First Name</label>
    </div>
    <div class="input-field">
        <input type="text" name="lastName" id="lastName" value="<?php echo htmlspecialchars($lastName); ?>"/>
        <label for="lastName">Last Name</label>
    </div>
    <div class="file-field input-field">
        <div class="btn">
            <span>Upload</span>
            <input type="file" name="uploadedFile">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path" type="text">
        </div>
        <div class="red-text">
            <?php echo $errors['extension']; ?>
        </div>
    </div>
    <div class="input-field center">
        <button class="btn-large pink white-text" type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>