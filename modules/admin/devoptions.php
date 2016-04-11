<h2 class="skew-up-smidge">Developer Options</h2>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $dali->updateSetting('maintenance');
  $success = "Maintenance Mode Changed";
  echo $success;
}?>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
  <!-- <input type="text" name="submit_dev_mode" value="1" hidden></input> -->
  <div class="form-group">
    <label>Maintenance Mode</label>
    <input type="checkbox" name="dev_on" data-off-text="Off" data-on-text="On" data-size="mini" class="BSswitch" <?php if ($maintenance) echo "checked"; ?> ></input>
  </div>

  <div class="form-group">
    <label>Maintenance Alert</label>
    <input type="checkbox" name="dev_alert" data-off-text="Off" data-on-text="On" data-size="mini" class="BSswitch" <?php if ($maintenance_show) echo "checked"; ?> ></input>
  </div>

  <div class="form-group">
    <label>Maintenance Message</label><br>
    <textarea rows="5" cols="150" name="dev_msg" placeholder="Alert message"><?= $maint_setting[0][1] ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Apply</button>
</form>