<span class="tve_options_headline"><span class="tve_icm tve-ic-move"></span><?php echo __("Custom menu options", "thrive-cb") ?></span>
<ul class="tve_menu">
    <li class="tve_ed_btn_text tve_firstOnRow">
        <label class="tve_text">
            <?php echo __("Menus", "thrive-cb") ?>
            <select class="tve_change" id="custom_menu_menu">
                <?php foreach ($custom_menus as $id => $name) : ?>
                    <option value="<?php echo $id ?>"><?php echo $name ?></option>
                <?php endforeach ?>
            </select>
        </label>
    </li>
    <li class="tve_ed_btn_text">
        <label>
            <?php echo __("Display thumbnails", "thrive-cb") ?> <input type="checkbox" class="tve_change" id="custom_menu_thumbnails" />
        </label>
    </li>
    <?php include dirname(__FILE__) . '/_margin.php' ?>
</ul>