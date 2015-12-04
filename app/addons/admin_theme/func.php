<?php
/**
 * HELOstore
 *
 * This source file is part of a commercial software. Only users who have purchased a valid license through
 * https://helostore.com/ and accepted to the terms of the License Agreement can install this product.
 *
 * @category   Add-ons
 * @package    HELOstore
 * @copyright  Copyright (c) 2015-2016 HELOstore. (https://helostore.com/)
 * @license    https://helostore.com/legal/license-agreement/   License Agreement
 * @version    $Id$
 */

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_admin_theme_styles_block_files(&$styles)
{
    $settings = \Tygh\Registry::get('addons.admin_theme');
    if (empty($settings['theme']) || $settings['theme'] == 'default') {
        return;
    }
    $view = \Tygh\Registry::get('view');
    foreach ($styles as $i => $style) {
        if ($style['relative'] == 'design/backend/css/styles.less') {
            unset($styles[$i]);
//            $src = 'addons/admin_theme/themes/' . $settings['theme'] . '/styles.less';
//            $styles[$i] = smarty_function_style(array('src' => $src), $view);
            break;
        }
    }
}