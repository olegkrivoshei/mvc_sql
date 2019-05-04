<p>Edit user</p>
<form class="contact_form" action="/admin/editn" method="post">
    <p>
        <label for="name">Name:</label>
        <input type="hidden" name="id" value="<?php echo $news[0]["id"]?>">
        <input type="text" name="name" value="<?php echo $news[0]["name"]?>" placeholder="Insert your name" required/>
        <span class="form_hint">Alex</span>
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $news[0]["email"]?>" placeholder="Insert your @mail" required/>
        <span class="form_hint">name@something.com</span>
    </p>
    <p>
        <label for="country">Country:</label>
        <select type="country" name="country" placeholder="Insert your country">
            <?php foreach ($country as $value) {
             ?>
                <option <?php if($value["id"]==$news[0]["country_id"]){echo 'selected';}?>  value="<?php echo $value["id"]; ?>"><?php  echo $value["country"]; ?></option>';

            <?php }?>
        </select>
    </p>
    <p>
        <button class="submit" type="submit">Save</button>
    </p>
</form>


<?php //var_dump($news); ?>