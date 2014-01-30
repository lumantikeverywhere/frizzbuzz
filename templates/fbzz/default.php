<h2>Frizz Buzz (Bazz)</h2>
<div id="fbzz-container">
<?php foreach($fbzz as $key=>$value): ?>
    <span><?php echo $value; ?></span> 
<?php endforeach; ?>
</div>
<div id="fbzz-redefined">
    <form method="get" onsubmit="return verify();">
        <h3>Redefine</h3>
        <label>Minimum</label><input type="text" value="<?php echo $range['min']; ?>" name="min" id="min" />
        <label>Maximum</label><input type="text" value="<?php echo $range['max']; ?>" name="max" id="max" />
        <input type="checkbox" name="applybazz" id="applybazz"<?php echo ($range['applybazz'] ? ' checked="CHECKED"' : ''); ?> /> <label for="applybazz">Apply 'Bazz' for consecutive Frizz/Buzz</label><br /><br />
        <input type="submit" value="Redifine" name="fbzz-submit" id="fbzz-submit" />
        <input type="button" value="Store Current" name="fbzz-reset" id="fbzz-reset" onclick="storeCurrent('<?php echo $range['min']; ?>','<?php echo $range['max']; ?>', '<?php echo $range['applybazz']; ?>');" />
    </form>
</div>
