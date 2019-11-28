<form action="index.php" method="POST">
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
    </div>
    <div class="input-field center">
        <button class="btn-large pink white-text">Submit</button>
    </div>
</form>