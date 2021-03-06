<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */


/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */
?>
<div class="row">
    <?php while($this->block("teaserblock")->loop()) { ?>

        <?php echo $this->renderlet("productteaser", array(
            "controller" => "shop",
            "action" => "product-cell",
            "editmode" => $this->editmode,
            "title" => "Drag a product here",
            "height" => 370,
            "width" => 270
        )); ?>

    <?php } ?>
</div>
