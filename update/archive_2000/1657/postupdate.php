<?php

function sendQuery ($sql) {
    try {
        $db = Pimcore_Resource::get();
        $db->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "Please execute the following query manually: <br />";
        echo "<pre>" . $sql . "</pre><hr />";
    }
}

sendQuery("ALTER TABLE `documents_page` DROP INDEX `prettyUrl`;");
sendQuery("ALTER TABLE `documents_page` ADD INDEX `prettyUrl` (`prettyUrl`);");

?>