<form action="index.php" method="POST" enctype="multipart/form-data">
    <label for="title">Choose a title:</label>
    <select name="title" id="title" class="browser-default">
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Ms">Ms</option>
    </select>
    <div class="input-field">
        <input type="text" name="firstName" id="firstName" />
        <label for="firstName">First Name</label>
    </div>
    <div class="input-field">
        <input type="text" name="lastName" id="lastName" />
        <label for="lastName">Last Name</label>
    <div class="file-field input-field">
        <div class="btn">
            <span>Upload</span>
            <input type="file" name="uploadedFile">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>
    <div class="input-field center">
        <button class="btn-large pink white-text" type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>