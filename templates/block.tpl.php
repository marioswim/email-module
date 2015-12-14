  <div class ="col-lg-12 contacto">
    <p><?php echo t("Do you need any further information?");?> </p>

    <form>
      <fieldset> 
      <div class="">
        <input type="text" id="textForm" name="name" placeholder="<?php echo t("Name");?>" required="" >
      </div>
      <div class="">
        <input type="text" id="textForm" name="email" placeholder="Email" required="" >
      </div>
      <div class="">
        <input type="text" id="textForm" name="telephone" placeholder="<?php echo t("Telephone");?>" required="" >
               
      </div>
      <div class="">
       <input type="text" id="textForm" name="subject" placeholder="<?php echo t("Subject");?>" required="" >
               
      </div>
      <div class="">
       <textarea type="text" id="textForm" rows="6" name="message" placeholder="<?php echo t("Message");?>" required="" ></textarea>
               
      </div>
      <div class="checkbox">
        <input id="check_politica" type="checkbox" name="check_politica" required="" class="">
       
       <span class="ng-scope"><?php echo t("I accept the ");?><a ui-sref="static.politica" href="#!/static/politica"><?php echo t("privacy policy");?></a></span>
               
      </div>
     <button type="submit" class="btn btn-default "><?php echo t("Send");?></button>
           
      </fieldset>
    </form>
    
  </div>
</div>