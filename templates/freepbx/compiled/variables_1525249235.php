<?php if(!defined('IN_RAINTPL')){exit('Hacker attempt');}?>        <h5><?php echo _('Example of Variables allowed in boxes')?></h5>
        
        <ul class='nobullets'>
        <li><code class='inline'>{$username.line.1}</code> <?php echo _('Device\'s Username (usually the extension)')?></li>
        <li><code class='inline'>{$displayname.line.1}</code> <?php echo _('Device\'s Description in FreePBX (Usually the Full Name)')?></li>
        <li><code class='inline'>{$server_host.line.1}</code> <?php echo _('Server IP For Line 1')?></li>
        <li><code class='inline'>{$server_port.line.1}</code> <?php echo _('Server Port For Line 1')?></li>
        <li><code class='inline'>{$mac}</code> <?php echo _('Device\'s Mac Address')?></li>
        <li><code class='inline'>{$model}</code> <?php echo _('Device\'s Model')?></li>
        </ul>
        
