<?php
/**
 * ?
 *
 * @param  string  $moduleclass_sfx
 * @param  string  $maxRoute        url to com_maxposter search results
 * @param  array   $search          current search data
 * @param  object  $helper
 */

// no direct access
defined('_JEXEC') or die;
//var_dump($sXML->saveXML());
?>
<form class="maxposter-search-form<?php echo $moduleclass_sfx ?> mod-maxposter-search" action="<?php echo $maxRoute ?>" method="POST" id="maxposter-search-form-<?php echo $module->id ?>">
    <?php # Кузов ?>
    <?php $err = $helper->isError('body_type') ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('body_type'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_BODYTYPE_LABEL_TEXT') ?></label>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <select id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('body_type'), $module->id) ?>" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('body_type', 'name') ?>"<?php echo $err ? ' class="invalid"' : '' ?>>
        <?php echo $helper->getOptions('body_type') ?>
    </select>


    <?php # Двигатель ?>
    <?php $err = $helper->isError('engine_type') ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('engine_type'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_ENGINETYPE_LABEL_TEXT') ?></label>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <select id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('engine_type'), $module->id) ?>" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('engine_type', 'name') ?>"<?php echo $err ? ' class="invalid"' : '' ?>>
        <?php echo $helper->getOptions('engine_type') ?>
    </select>


    <?php # КПП ?>
    <?php $err = $helper->isError('gearbox_type') ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('gearbox_type'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_GEARBOXTYPE_LABEL_TEXT') ?></label>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <select id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('gearbox_type'), $module->id) ?>" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('gearbox_type', 'name') ?>"<?php echo $err ? ' class="invalid"' : '' ?>>
        <?php echo $helper->getOptions('gearbox_type') ?>
    </select>


    <?php # Руль ?>
    <?php $err = $helper->isError('steering_wheel') ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('steering_wheel'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_STEERINGWHEEL_LABEL_TEXT') ?></label>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <select id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('steering_wheel'), $module->id) ?>" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('steering_wheel', 'name') ?>"<?php echo $err ? ' class="invalid"' : '' ?>>
        <?php echo $helper->getOptions('steering_wheel') ?>
    </select>


    <fieldset>
        <legend><?php echo JText::_('MOD_MAXPOSTER_SEARCH_YEAR_LABEL_TEXT') ?></legend>
    <?php $err = $helper->isError('year/to') ?>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <?php # Год от ?>
    <?php $err = $helper->isError('year/from') ?>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('year/from'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_YEAR_FROM_LABEL_TEXT') ?></label>
    <input id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('year/from'), $module->id) ?>" type="text" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('year/from', 'name') ?>" value="<?php echo $helper->getFieldAttribute('year/from', 'value') ?>" size="4"<?php echo $err ? ' class="invalid"' : '' ?> />

    <?php # Год до ?>
    <?php $err = $helper->isError('year/to') ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('year/to'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_YEAR_TO_LABEL_TEXT') ?></label>
    <input id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('year/to'), $module->id) ?>" type="text" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('year/to', 'name') ?>" value="<?php echo $helper->getFieldAttribute('year/to', 'value') ?>" size="4"<?php echo $err ? ' class="invalid"' : '' ?> />
    </fieldset>


    <fieldset>
        <legend><?php echo JText::_('MOD_MAXPOSTER_SEARCH_PRICE_LABEL_TEXT') ?></legend>
    <?php # Цена от ?>
    <?php $err = $helper->isError('price/from') ?>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('price/from'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_PRICE_FROM_LABEL_TEXT') ?></label>
    <input id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('price/from'), $module->id) ?>" type="text" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('price/from', 'name') ?>" value="<?php echo $helper->getFieldAttribute('price/from', 'value') ?>" size="9"<?php echo $err ? ' class="invalid"' : '' ?> />

    <?php # Цена до ?>
    <?php $err = $helper->isError('price/to') ?>
    <?php if ($err) : ?>
        <div class="invalid"><?php echo $err ?></div>
    <?php endif ?>
    <label for="<?php echo sprintf('maxposter_%s_%s', $helper->getId('price/to'), $module->id) ?>"<?php echo $err ? ' class="invalid"' : '' ?>><?php echo JText::_('MOD_MAXPOSTER_SEARCH_PRICE_TO_LABEL_TEXT') ?></label>
    <input id="<?php echo sprintf('maxposter_%s_%s', $helper->getId('price/to'), $module->id) ?>" type="text" name="<?php echo $params->get('prefix', ''), $helper->getFieldAttribute('price/to', 'name') ?>" value="<?php echo $helper->getFieldAttribute('price/to', 'value') ?>" size="9"<?php echo $err ? ' class="invalid"' : '' ?> />
    </fieldset>

    <input type="submit" value="<?php echo JText::_('MOD_MAXPOSTER_SEARCH_SUBMIT') ?>" />
    <input type="reset" value="<?php echo JText::_('MOD_MAXPOSTER_SEARCH_RESET') ?>" />
</form>
