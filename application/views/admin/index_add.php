<p>Add new user</p>
<form class="contact_form" action="/admin/addn" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Insert your name" required/>
        <span class="form_hint">Alex</span>
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Insert your @mail" required/>
        <span class="form_hint">name@something.com</span>
    </p>
    <p>
        <label for="country">Country:</label>
        <select type="country" name="country" placeholder="Insert your country">
            <option selected value="0">Select your country</option>
            <?php foreach ($news as $value) {
                echo'<option value="'.$value["id"].'">'.$value["country"].'</option>';
            }?>
        </select>
    </p>
    <p>
        <button class="submit" type="submit">Save</button>
    </p>
</form>