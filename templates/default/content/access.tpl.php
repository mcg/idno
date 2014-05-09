<?php
    if (\Idno\Core\site()->config->experimental) {
?>
<input type="hidden" name="access" id="access-control-id" value="PUBLIC" />
<div id="access-control" class="acl">
    <div class="btn-group">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <span id="acl-text"><i class="icon-globe"> </i> Public</span>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#" data-acl="PUBLIC" class="acl-option"><i class="icon-globe"> </i> Public</a></li>
	    <li><a href="#" data-acl="FOLLOWING" class="acl-option"><i class="icon-group"> </i> People I follow...</a></li>
            <?php
            $acls = \Idno\Entities\AccessGroup::get(['owner' => \Idno\Core\site()->session()->currentUserUUID()]);
            if (!empty($acls)) {
                foreach ($acls as $acl) {
                    ?>
                    <li><a href="#" data-acl="<?= $acl->getUUID(); ?>" class="acl-option"><i class="icon-cog"> </i> <?= $acl->title; ?></a></li>
                        <?php
                    }
                }
                ?>
        </ul>
    </div>
</div>
<?php 
    }
?>